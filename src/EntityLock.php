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
   * @param int $typeId   The ID of the type of the entity.
   * @param int $entityId The ID of the entity.
   *
   * @return void
   *
   * @since 1.0.0
   * @api
   */
  public function acquireLock($typeId, $entityId);

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
   * Returns the ID of the type of the locked entity.
   *
   * @return int
   *
   * @since 1.0.0
   * @api
   */
  public function getTypeId();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the current version of the locked entity.
   *
   * @returns int
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
