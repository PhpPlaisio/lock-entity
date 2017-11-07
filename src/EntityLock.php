<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\Lock;

/**
 * Interface for optimistically locking entities.
 */
interface EntityLock
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Acquires a lock on an object.
   *
   * @param int $nameId   The ID of the name of the entity lock.
   * @param int $entityId The ID of the entity.
   *
   * @return void
   *
   * @since 1.0.0
   * @api
   */
  public function acquireLock($nameId, $entityId);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the locked entity.
   *
   * @return int
   *
   * @since 1.0.0
   * @api
   */
  public function getEntityId();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the name of the entity lock.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getName();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the name of the entity lock.
   *
   * @return int
   *
   * @since 1.0.0
   * @api
   */
  public function getNameId();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the current version of the locked entity.
   *
   * @return int
   *
   * @since 1.0.0
   * @api
   */
  public function getVersion();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Updates the version of the locked entity.
   *
   * @return void
   *
   * @since 1.0.0
   * @api
   */
  public function updateVersion();

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
