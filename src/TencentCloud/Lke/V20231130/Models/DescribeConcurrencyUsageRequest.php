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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConcurrencyUsage请求参数结构体
 *
 * @method string getModelName() 获取模型标识
 * @method void setModelName(string $ModelName) 设置模型标识
 * @method string getStartTime() 获取开始时间戳, 单位为秒(废弃)
 * @method void setStartTime(string $StartTime) 设置开始时间戳, 单位为秒(废弃)
 * @method string getEndTime() 获取结束时间戳, 单位为秒(废弃)
 * @method void setEndTime(string $EndTime) 设置结束时间戳, 单位为秒(废弃)
 * @method array getAppBizIds() 获取应用id列表
 * @method void setAppBizIds(array $AppBizIds) 设置应用id列表
 * @method string getSpaceId() 获取空间id
 * @method void setSpaceId(string $SpaceId) 设置空间id
 * @method integer getStatStartTime() 获取开始时间戳, 单位为秒
 * @method void setStatStartTime(integer $StatStartTime) 设置开始时间戳, 单位为秒
 * @method integer getStatEndTime() 获取结束时间戳, 单位为秒
 * @method void setStatEndTime(integer $StatEndTime) 设置结束时间戳, 单位为秒
 */
class DescribeConcurrencyUsageRequest extends AbstractModel
{
    /**
     * @var string 模型标识
     */
    public $ModelName;

    /**
     * @var string 开始时间戳, 单位为秒(废弃)
     */
    public $StartTime;

    /**
     * @var string 结束时间戳, 单位为秒(废弃)
     */
    public $EndTime;

    /**
     * @var array 应用id列表
     */
    public $AppBizIds;

    /**
     * @var string 空间id
     */
    public $SpaceId;

    /**
     * @var integer 开始时间戳, 单位为秒
     */
    public $StatStartTime;

    /**
     * @var integer 结束时间戳, 单位为秒
     */
    public $StatEndTime;

    /**
     * @param string $ModelName 模型标识
     * @param string $StartTime 开始时间戳, 单位为秒(废弃)
     * @param string $EndTime 结束时间戳, 单位为秒(废弃)
     * @param array $AppBizIds 应用id列表
     * @param string $SpaceId 空间id
     * @param integer $StatStartTime 开始时间戳, 单位为秒
     * @param integer $StatEndTime 结束时间戳, 单位为秒
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("StatStartTime",$param) and $param["StatStartTime"] !== null) {
            $this->StatStartTime = $param["StatStartTime"];
        }

        if (array_key_exists("StatEndTime",$param) and $param["StatEndTime"] !== null) {
            $this->StatEndTime = $param["StatEndTime"];
        }
    }
}
