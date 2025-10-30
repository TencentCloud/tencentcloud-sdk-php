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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源列列表信息
 *
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 * @method string getResourceName() 获取资源名称
 * @method void setResourceName(string $ResourceName) 设置资源名称
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method string getResourceRegion() 获取地域
 * @method void setResourceRegion(string $ResourceRegion) 设置地域
 * @method string getResourceStatus() 获取资源状态
 * @method void setResourceStatus(string $ResourceStatus) 设置资源状态
 * @method integer getResourceDelete() 获取是否删除 1:已删除 0:未删除
 * @method void setResourceDelete(integer $ResourceDelete) 设置是否删除 1:已删除 0:未删除
 * @method string getResourceCreateTime() 获取资源创建时间
 * @method void setResourceCreateTime(string $ResourceCreateTime) 设置资源创建时间
 * @method array getTags() 获取标签信息
 * @method void setTags(array $Tags) 设置标签信息
 * @method string getResourceZone() 获取可用区
 * @method void setResourceZone(string $ResourceZone) 设置可用区
 * @method string getComplianceResult() 获取合规状态
 * @method void setComplianceResult(string $ComplianceResult) 设置合规状态
 * @method integer getResourceOwnerId() 获取资源所属用户ID
 * @method void setResourceOwnerId(integer $ResourceOwnerId) 设置资源所属用户ID
 * @method string getResourceOwnerName() 获取用户昵称
 * @method void setResourceOwnerName(string $ResourceOwnerName) 设置用户昵称
 */
class AggregateResourceInfo extends AbstractModel
{
    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @var string 资源名称
     */
    public $ResourceName;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var string 地域
     */
    public $ResourceRegion;

    /**
     * @var string 资源状态
     */
    public $ResourceStatus;

    /**
     * @var integer 是否删除 1:已删除 0:未删除
     */
    public $ResourceDelete;

    /**
     * @var string 资源创建时间
     */
    public $ResourceCreateTime;

    /**
     * @var array 标签信息
     */
    public $Tags;

    /**
     * @var string 可用区
     */
    public $ResourceZone;

    /**
     * @var string 合规状态
     */
    public $ComplianceResult;

    /**
     * @var integer 资源所属用户ID
     */
    public $ResourceOwnerId;

    /**
     * @var string 用户昵称
     */
    public $ResourceOwnerName;

    /**
     * @param string $ResourceType 资源类型
     * @param string $ResourceName 资源名称
     * @param string $ResourceId 资源ID
     * @param string $ResourceRegion 地域
     * @param string $ResourceStatus 资源状态
     * @param integer $ResourceDelete 是否删除 1:已删除 0:未删除
     * @param string $ResourceCreateTime 资源创建时间
     * @param array $Tags 标签信息
     * @param string $ResourceZone 可用区
     * @param string $ComplianceResult 合规状态
     * @param integer $ResourceOwnerId 资源所属用户ID
     * @param string $ResourceOwnerName 用户昵称
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("ResourceDelete",$param) and $param["ResourceDelete"] !== null) {
            $this->ResourceDelete = $param["ResourceDelete"];
        }

        if (array_key_exists("ResourceCreateTime",$param) and $param["ResourceCreateTime"] !== null) {
            $this->ResourceCreateTime = $param["ResourceCreateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ResourceZone",$param) and $param["ResourceZone"] !== null) {
            $this->ResourceZone = $param["ResourceZone"];
        }

        if (array_key_exists("ComplianceResult",$param) and $param["ComplianceResult"] !== null) {
            $this->ComplianceResult = $param["ComplianceResult"];
        }

        if (array_key_exists("ResourceOwnerId",$param) and $param["ResourceOwnerId"] !== null) {
            $this->ResourceOwnerId = $param["ResourceOwnerId"];
        }

        if (array_key_exists("ResourceOwnerName",$param) and $param["ResourceOwnerName"] !== null) {
            $this->ResourceOwnerName = $param["ResourceOwnerName"];
        }
    }
}
