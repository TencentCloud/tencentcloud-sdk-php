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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmInstances请求参数结构体
 *
 * @method array getTags() 获取Tag 列表
 * @method void setTags(array $Tags) 设置Tag 列表
 * @method string getInstanceName() 获取按业务系统名过滤，支持模糊检索
 * @method void setInstanceName(string $InstanceName) 设置按业务系统名过滤，支持模糊检索
 * @method string getInstanceId() 获取按业务系统 ID 过滤，支持模糊检索
 * @method void setInstanceId(string $InstanceId) 设置按业务系统 ID 过滤，支持模糊检索
 * @method array getInstanceIds() 获取按业务系统 ID 过滤
 * @method void setInstanceIds(array $InstanceIds) 设置按业务系统 ID 过滤
 * @method integer getDemoInstanceFlag() 获取是否查询官方 Demo 业务系统（0=非 Demo 业务系统，1=Demo 业务系统，默认为0）
 * @method void setDemoInstanceFlag(integer $DemoInstanceFlag) 设置是否查询官方 Demo 业务系统（0=非 Demo 业务系统，1=Demo 业务系统，默认为0）
 * @method integer getAllRegionsFlag() 获取是否查询全地域业务系统（0=不查询全地域，1=查询全地域，默认为0）
 * @method void setAllRegionsFlag(integer $AllRegionsFlag) 设置是否查询全地域业务系统（0=不查询全地域，1=查询全地域，默认为0）
 */
class DescribeApmInstancesRequest extends AbstractModel
{
    /**
     * @var array Tag 列表
     */
    public $Tags;

    /**
     * @var string 按业务系统名过滤，支持模糊检索
     */
    public $InstanceName;

    /**
     * @var string 按业务系统 ID 过滤，支持模糊检索
     */
    public $InstanceId;

    /**
     * @var array 按业务系统 ID 过滤
     */
    public $InstanceIds;

    /**
     * @var integer 是否查询官方 Demo 业务系统（0=非 Demo 业务系统，1=Demo 业务系统，默认为0）
     */
    public $DemoInstanceFlag;

    /**
     * @var integer 是否查询全地域业务系统（0=不查询全地域，1=查询全地域，默认为0）
     */
    public $AllRegionsFlag;

    /**
     * @param array $Tags Tag 列表
     * @param string $InstanceName 按业务系统名过滤，支持模糊检索
     * @param string $InstanceId 按业务系统 ID 过滤，支持模糊检索
     * @param array $InstanceIds 按业务系统 ID 过滤
     * @param integer $DemoInstanceFlag 是否查询官方 Demo 业务系统（0=非 Demo 业务系统，1=Demo 业务系统，默认为0）
     * @param integer $AllRegionsFlag 是否查询全地域业务系统（0=不查询全地域，1=查询全地域，默认为0）
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("DemoInstanceFlag",$param) and $param["DemoInstanceFlag"] !== null) {
            $this->DemoInstanceFlag = $param["DemoInstanceFlag"];
        }

        if (array_key_exists("AllRegionsFlag",$param) and $param["AllRegionsFlag"] !== null) {
            $this->AllRegionsFlag = $param["AllRegionsFlag"];
        }
    }
}
