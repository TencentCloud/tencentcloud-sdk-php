<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAssetImageRegistryScanStopOneKey请求参数结构体
 *
 * @method boolean getAll() 获取是否扫描全部镜像
 * @method void setAll(boolean $All) 设置是否扫描全部镜像
 * @method array getImages() 获取扫描的镜像列表
 * @method void setImages(array $Images) 设置扫描的镜像列表
 * @method array getId() 获取扫描的镜像列表Id
 * @method void setId(array $Id) 设置扫描的镜像列表Id
 * @method integer getTaskID() 获取停止的任务ID
 * @method void setTaskID(integer $TaskID) 设置停止的任务ID
 */
class ModifyAssetImageRegistryScanStopOneKeyRequest extends AbstractModel
{
    /**
     * @var boolean 是否扫描全部镜像
     */
    public $All;

    /**
     * @var array 扫描的镜像列表
     */
    public $Images;

    /**
     * @var array 扫描的镜像列表Id
     */
    public $Id;

    /**
     * @var integer 停止的任务ID
     */
    public $TaskID;

    /**
     * @param boolean $All 是否扫描全部镜像
     * @param array $Images 扫描的镜像列表
     * @param array $Id 扫描的镜像列表Id
     * @param integer $TaskID 停止的任务ID
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
        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }
    }
}
