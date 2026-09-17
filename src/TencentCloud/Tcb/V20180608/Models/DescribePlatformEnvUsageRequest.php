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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlatformEnvUsage请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境Id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境Id</p>
 * @method string getStartDate() 获取<p>查询用量起始时间</p><p>参数格式：YYYY-MM-DD</p>
 * @method void setStartDate(string $StartDate) 设置<p>查询用量起始时间</p><p>参数格式：YYYY-MM-DD</p>
 * @method string getEndDate() 获取<p>查询用量结束时间</p><p>参数格式：YYYY-MM-DD</p>
 * @method void setEndDate(string $EndDate) 设置<p>查询用量结束时间</p><p>参数格式：YYYY-MM-DD</p>
 * @method array getResourceTypes() 获取<p>资源类型</p><p>枚举值：</p><ul><li>Storage： 云存储</li><li>Function： 云函数</li><li>Database： 数据库</li></ul>
 * @method void setResourceTypes(array $ResourceTypes) 设置<p>资源类型</p><p>枚举值：</p><ul><li>Storage： 云存储</li><li>Function： 云函数</li><li>Database： 数据库</li></ul>
 * @method boolean getNeedUsageDetails() 获取<p>是否展示用量明细</p>
 * @method void setNeedUsageDetails(boolean $NeedUsageDetails) 设置<p>是否展示用量明细</p>
 */
class DescribePlatformEnvUsageRequest extends AbstractModel
{
    /**
     * @var string <p>环境Id</p>
     */
    public $EnvId;

    /**
     * @var string <p>查询用量起始时间</p><p>参数格式：YYYY-MM-DD</p>
     */
    public $StartDate;

    /**
     * @var string <p>查询用量结束时间</p><p>参数格式：YYYY-MM-DD</p>
     */
    public $EndDate;

    /**
     * @var array <p>资源类型</p><p>枚举值：</p><ul><li>Storage： 云存储</li><li>Function： 云函数</li><li>Database： 数据库</li></ul>
     */
    public $ResourceTypes;

    /**
     * @var boolean <p>是否展示用量明细</p>
     */
    public $NeedUsageDetails;

    /**
     * @param string $EnvId <p>环境Id</p>
     * @param string $StartDate <p>查询用量起始时间</p><p>参数格式：YYYY-MM-DD</p>
     * @param string $EndDate <p>查询用量结束时间</p><p>参数格式：YYYY-MM-DD</p>
     * @param array $ResourceTypes <p>资源类型</p><p>枚举值：</p><ul><li>Storage： 云存储</li><li>Function： 云函数</li><li>Database： 数据库</li></ul>
     * @param boolean $NeedUsageDetails <p>是否展示用量明细</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ResourceTypes",$param) and $param["ResourceTypes"] !== null) {
            $this->ResourceTypes = $param["ResourceTypes"];
        }

        if (array_key_exists("NeedUsageDetails",$param) and $param["NeedUsageDetails"] !== null) {
            $this->NeedUsageDetails = $param["NeedUsageDetails"];
        }
    }
}
