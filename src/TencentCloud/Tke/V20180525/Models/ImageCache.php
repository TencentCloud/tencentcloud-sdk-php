<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像缓存的信息
 *
 * @method string getImageCacheId() 获取镜像缓存Id
 * @method void setImageCacheId(string $ImageCacheId) 设置镜像缓存Id
 * @method string getImageCacheName() 获取镜像缓存名称
 * @method void setImageCacheName(string $ImageCacheName) 设置镜像缓存名称
 * @method integer getImageCacheSize() 获取镜像缓存大小。单位：GiB
 * @method void setImageCacheSize(integer $ImageCacheSize) 设置镜像缓存大小。单位：GiB
 * @method array getImages() 获取镜像缓存包含的镜像列表
 * @method void setImages(array $Images) 设置镜像缓存包含的镜像列表
 * @method string getCreationTime() 获取创建时间
 * @method void setCreationTime(string $CreationTime) 设置创建时间
 * @method string getExpireDateTime() 获取到期时间
 * @method void setExpireDateTime(string $ExpireDateTime) 设置到期时间
 * @method array getEvents() 获取镜像缓存事件信息
 * @method void setEvents(array $Events) 设置镜像缓存事件信息
 * @method string getLastMatchedTime() 获取最新一次匹配到镜像缓存的时间
 * @method void setLastMatchedTime(string $LastMatchedTime) 设置最新一次匹配到镜像缓存的时间
 * @method string getSnapshotId() 获取镜像缓存对应的快照Id
 * @method void setSnapshotId(string $SnapshotId) 设置镜像缓存对应的快照Id
 * @method string getStatus() 获取镜像缓存状态，可能取值：
Pending：创建中
Ready：创建完成
Failed：创建失败
Updating：更新中
UpdateFailed：更新失败
只有状态为Ready时，才能正常使用镜像缓存
 * @method void setStatus(string $Status) 设置镜像缓存状态，可能取值：
Pending：创建中
Ready：创建完成
Failed：创建失败
Updating：更新中
UpdateFailed：更新失败
只有状态为Ready时，才能正常使用镜像缓存
 */
class ImageCache extends AbstractModel
{
    /**
     * @var string 镜像缓存Id
     */
    public $ImageCacheId;

    /**
     * @var string 镜像缓存名称
     */
    public $ImageCacheName;

    /**
     * @var integer 镜像缓存大小。单位：GiB
     */
    public $ImageCacheSize;

    /**
     * @var array 镜像缓存包含的镜像列表
     */
    public $Images;

    /**
     * @var string 创建时间
     */
    public $CreationTime;

    /**
     * @var string 到期时间
     */
    public $ExpireDateTime;

    /**
     * @var array 镜像缓存事件信息
     */
    public $Events;

    /**
     * @var string 最新一次匹配到镜像缓存的时间
     */
    public $LastMatchedTime;

    /**
     * @var string 镜像缓存对应的快照Id
     */
    public $SnapshotId;

    /**
     * @var string 镜像缓存状态，可能取值：
Pending：创建中
Ready：创建完成
Failed：创建失败
Updating：更新中
UpdateFailed：更新失败
只有状态为Ready时，才能正常使用镜像缓存
     */
    public $Status;

    /**
     * @param string $ImageCacheId 镜像缓存Id
     * @param string $ImageCacheName 镜像缓存名称
     * @param integer $ImageCacheSize 镜像缓存大小。单位：GiB
     * @param array $Images 镜像缓存包含的镜像列表
     * @param string $CreationTime 创建时间
     * @param string $ExpireDateTime 到期时间
     * @param array $Events 镜像缓存事件信息
     * @param string $LastMatchedTime 最新一次匹配到镜像缓存的时间
     * @param string $SnapshotId 镜像缓存对应的快照Id
     * @param string $Status 镜像缓存状态，可能取值：
Pending：创建中
Ready：创建完成
Failed：创建失败
Updating：更新中
UpdateFailed：更新失败
只有状态为Ready时，才能正常使用镜像缓存
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageCacheId",$param) and $param["ImageCacheId"] !== null) {
            $this->ImageCacheId = $param["ImageCacheId"];
        }

        if (array_key_exists("ImageCacheName",$param) and $param["ImageCacheName"] !== null) {
            $this->ImageCacheName = $param["ImageCacheName"];
        }

        if (array_key_exists("ImageCacheSize",$param) and $param["ImageCacheSize"] !== null) {
            $this->ImageCacheSize = $param["ImageCacheSize"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("ExpireDateTime",$param) and $param["ExpireDateTime"] !== null) {
            $this->ExpireDateTime = $param["ExpireDateTime"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new ImageCacheEvent();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("LastMatchedTime",$param) and $param["LastMatchedTime"] !== null) {
            $this->LastMatchedTime = $param["LastMatchedTime"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
