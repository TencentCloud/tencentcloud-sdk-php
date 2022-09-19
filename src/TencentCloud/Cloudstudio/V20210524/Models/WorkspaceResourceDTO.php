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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间资源结构
 *
 * @method integer getCpuCoreNumber() 获取CPU核心数
 * @method void setCpuCoreNumber(integer $CpuCoreNumber) 设置CPU核心数
 * @method integer getNormalMemory() 获取一般内存
 * @method void setNormalMemory(integer $NormalMemory) 设置一般内存
 * @method integer getSystemStorage() 获取系统存储
 * @method void setSystemStorage(integer $SystemStorage) 设置系统存储
 * @method integer getUserStorage() 获取用户存储
 * @method void setUserStorage(integer $UserStorage) 设置用户存储
 * @method integer getGpuNumber() 获取GPU数
 * @method void setGpuNumber(integer $GpuNumber) 设置GPU数
 * @method integer getGpuMemory() 获取GPU内存
 * @method void setGpuMemory(integer $GpuMemory) 设置GPU内存
 */
class WorkspaceResourceDTO extends AbstractModel
{
    /**
     * @var integer CPU核心数
     */
    public $CpuCoreNumber;

    /**
     * @var integer 一般内存
     */
    public $NormalMemory;

    /**
     * @var integer 系统存储
     */
    public $SystemStorage;

    /**
     * @var integer 用户存储
     */
    public $UserStorage;

    /**
     * @var integer GPU数
     */
    public $GpuNumber;

    /**
     * @var integer GPU内存
     */
    public $GpuMemory;

    /**
     * @param integer $CpuCoreNumber CPU核心数
     * @param integer $NormalMemory 一般内存
     * @param integer $SystemStorage 系统存储
     * @param integer $UserStorage 用户存储
     * @param integer $GpuNumber GPU数
     * @param integer $GpuMemory GPU内存
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
        if (array_key_exists("CpuCoreNumber",$param) and $param["CpuCoreNumber"] !== null) {
            $this->CpuCoreNumber = $param["CpuCoreNumber"];
        }

        if (array_key_exists("NormalMemory",$param) and $param["NormalMemory"] !== null) {
            $this->NormalMemory = $param["NormalMemory"];
        }

        if (array_key_exists("SystemStorage",$param) and $param["SystemStorage"] !== null) {
            $this->SystemStorage = $param["SystemStorage"];
        }

        if (array_key_exists("UserStorage",$param) and $param["UserStorage"] !== null) {
            $this->UserStorage = $param["UserStorage"];
        }

        if (array_key_exists("GpuNumber",$param) and $param["GpuNumber"] !== null) {
            $this->GpuNumber = $param["GpuNumber"];
        }

        if (array_key_exists("GpuMemory",$param) and $param["GpuMemory"] !== null) {
            $this->GpuMemory = $param["GpuMemory"];
        }
    }
}
