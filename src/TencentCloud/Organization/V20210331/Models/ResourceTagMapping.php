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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源及关联的标签
 *
 * @method string getResource() 获取资源六段式。腾讯云使用资源六段式描述一个资源。
例如：qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}。
 * @method void setResource(string $Resource) 设置资源六段式。腾讯云使用资源六段式描述一个资源。
例如：qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}。
 * @method TagComplianceDetails getComplianceDetails() 获取合规详情。
 * @method void setComplianceDetails(TagComplianceDetails $ComplianceDetails) 设置合规详情。
 * @method array getTags() 获取资源标签。
 * @method void setTags(array $Tags) 设置资源标签。
 */
class ResourceTagMapping extends AbstractModel
{
    /**
     * @var string 资源六段式。腾讯云使用资源六段式描述一个资源。
例如：qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}。
     */
    public $Resource;

    /**
     * @var TagComplianceDetails 合规详情。
     */
    public $ComplianceDetails;

    /**
     * @var array 资源标签。
     */
    public $Tags;

    /**
     * @param string $Resource 资源六段式。腾讯云使用资源六段式描述一个资源。
例如：qcs::${ServiceType}:${Region}:${Account}:${ResourcePreifx}/${ResourceId}。
     * @param TagComplianceDetails $ComplianceDetails 合规详情。
     * @param array $Tags 资源标签。
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("ComplianceDetails",$param) and $param["ComplianceDetails"] !== null) {
            $this->ComplianceDetails = new TagComplianceDetails();
            $this->ComplianceDetails->deserialize($param["ComplianceDetails"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
