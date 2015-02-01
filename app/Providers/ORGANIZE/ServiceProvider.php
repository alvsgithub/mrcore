<?php namespace Mrcore\Providers;

use ReflectionClass;


/**
 * I brought back Workbenches from Laravel 4.2, so this package() function is required
 */
abstract class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

	/**
	 * Register the package's component namespaces.
	 *
	 * @param  string  $package
	 * @param  string  $namespace
	 * @param  string  $path
	 * @return void
	 */
	public function package($package, $namespace = null, $path = null)
	{
		$namespace = $this->getPackageNamespace($package, $namespace);
		// In this method we will register the configuration package for the package
		// so that the configuration options cleanly cascade into the application
		// folder to make the developers lives much easier in maintaining them.
		$path = $path ?: $this->guessPackagePath();
		$config = $path.'/config';
		if ($this->app['files']->isDirectory($config))
		{
			$this->app['config']->package($package, $config, $namespace);
		}
		// Next we will check for any "language" components. If language files exist
		// we will register them with this given package's namespace so that they
		// may be accessed using the translation facilities of the application.
		$lang = $path.'/lang';
		if ($this->app['files']->isDirectory($lang))
		{
			$this->app['translator']->addNamespace($namespace, $lang);
		}
		// Next, we will see if the application view folder contains a folder for the
		// package and namespace. If it does, we'll give that folder precedence on
		// the loader list for the views so the package views can be overridden.
		$appView = $this->getAppViewPath($package);
		if ($this->app['files']->isDirectory($appView))
		{
			$this->app['view']->addNamespace($namespace, $appView);
		}
		// Finally we will register the view namespace so that we can access each of
		// the views available in this package. We use a standard convention when
		// registering the paths to every package's views and other components.
		$view = $path.'/views';
		if ($this->app['files']->isDirectory($view))
		{
			$this->app['view']->addNamespace($namespace, $view);
		}
	}

	/**
	 * Get the application package view path.
	 *
	 * @param  string  $package
	 * @return string
	 */
	protected function getAppViewPath($package)
	{
		return $this->app['path']."/views/packages/{$package}";
	}

	/**
	 * Determine the namespace for a package.
	 *
	 * @param  string  $package
	 * @param  string  $namespace
	 * @return string
	 */
	protected function getPackageNamespace($package, $namespace)
	{
		if (is_null($namespace))
		{
			list($vendor, $namespace) = explode('/', $package);
		}
		return $namespace;
	}

			/**
	 * Guess the package path for the provider.
	 *
	 * @return string
	 */
	public function guessPackagePath()
	{
		$path = (new ReflectionClass($this))->getFileName();
		return realpath(dirname($path).'/../../');
	}



}