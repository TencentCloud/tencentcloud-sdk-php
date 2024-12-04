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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUsageCallDetail请求参数结构体
 *
 * @method string getModelName() 获取模型标识
 * @method void setModelName(string $ModelName) 设置模型标识
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取分页数量
 * @method void setPageSize(integer $PageSize) 设置分页数量
 * @method array getUinAccount() 获取uin列表
 * @method void setUinAccount(array $UinAccount) 设置uin列表
 * @method array getAppBizIds() 获取应用ID列表
 * @method void setAppBizIds(array $AppBizIds) 设置应用ID列表
 * @method string getCallType() 获取调用类型列表
 * @method void setCallType(string $CallType) 设置调用类型列表
 * @method array getSubScenes() 获取筛选子场景
 * @method void setSubScenes(array $SubScenes) 设置筛选子场景
 */
class ListUsageCallDetailRequest extends AbstractModel
{
    /**
     * @var string 模型标识
     */
    public $ModelName;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 分页数量
     */
    public $PageSize;

    /**
     * @var array uin列表
     */
    public $UinAccount;

    /**
     * @var array 应用ID列表
     */
    public $AppBizIds;

    /**
     * @var string 调用类型列表
     */
    public $CallType;

    /**
     * @var array 筛选子场景
     */
    public $SubScenes;

    /**
     * @param string $ModelName 模型标识
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $PageNumber 页码
     * @param integer $PageSize 分页数量
     * @param array $UinAccount uin列表
     * @param array $AppBizIds 应用ID列表
     * @param string $CallType 调用类型列表
     * @param array $SubScenes 筛选子场景
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("UinAccount",$param) and $param["UinAccount"] !== null) {
            $this->UinAccount = $param["UinAccount"];
        }

        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("SubScenes",$param) and $param["SubScenes"] !== null) {
            $this->SubScenes = $param["SubScenes"];
        }
    }
}
