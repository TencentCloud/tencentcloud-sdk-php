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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费套餐包用量信息
 *
 * @method integer getPackageType() 获取<p>套餐类型</p><p>枚举值：</p><ul><li>1： 免费版</li><li>2： 专业版</li><li>3： 企业版</li></ul>
 * @method void setPackageType(integer $PackageType) 设置<p>套餐类型</p><p>枚举值：</p><ul><li>1： 免费版</li><li>2： 专业版</li><li>3： 企业版</li></ul>
 * @method integer getResourceTotal() 获取<p>资源包总量</p>
 * @method void setResourceTotal(integer $ResourceTotal) 设置<p>资源包总量</p>
 * @method float getResourceUsage() 获取<p>资源包用量</p>
 * @method void setResourceUsage(float $ResourceUsage) 设置<p>资源包用量</p>
 * @method float getKnowledgeCapacity() 获取<p>知识库容量</p>
 * @method void setKnowledgeCapacity(float $KnowledgeCapacity) 设置<p>知识库容量</p>
 * @method float getKnowledgeUsage() 获取<p>知识库用量</p>
 * @method void setKnowledgeUsage(float $KnowledgeUsage) 设置<p>知识库用量</p>
 * @method integer getResourceStatus() 获取<p>资源包状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>3： 已到期</li><li>4： 即将到期</li></ul>
 * @method void setResourceStatus(integer $ResourceStatus) 设置<p>资源包状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>3： 已到期</li><li>4： 即将到期</li></ul>
 */
class ResourcePackageInfo extends AbstractModel
{
    /**
     * @var integer <p>套餐类型</p><p>枚举值：</p><ul><li>1： 免费版</li><li>2： 专业版</li><li>3： 企业版</li></ul>
     */
    public $PackageType;

    /**
     * @var integer <p>资源包总量</p>
     */
    public $ResourceTotal;

    /**
     * @var float <p>资源包用量</p>
     */
    public $ResourceUsage;

    /**
     * @var float <p>知识库容量</p>
     */
    public $KnowledgeCapacity;

    /**
     * @var float <p>知识库用量</p>
     */
    public $KnowledgeUsage;

    /**
     * @var integer <p>资源包状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>3： 已到期</li><li>4： 即将到期</li></ul>
     */
    public $ResourceStatus;

    /**
     * @param integer $PackageType <p>套餐类型</p><p>枚举值：</p><ul><li>1： 免费版</li><li>2： 专业版</li><li>3： 企业版</li></ul>
     * @param integer $ResourceTotal <p>资源包总量</p>
     * @param float $ResourceUsage <p>资源包用量</p>
     * @param float $KnowledgeCapacity <p>知识库容量</p>
     * @param float $KnowledgeUsage <p>知识库用量</p>
     * @param integer $ResourceStatus <p>资源包状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>3： 已到期</li><li>4： 即将到期</li></ul>
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
        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ResourceTotal",$param) and $param["ResourceTotal"] !== null) {
            $this->ResourceTotal = $param["ResourceTotal"];
        }

        if (array_key_exists("ResourceUsage",$param) and $param["ResourceUsage"] !== null) {
            $this->ResourceUsage = $param["ResourceUsage"];
        }

        if (array_key_exists("KnowledgeCapacity",$param) and $param["KnowledgeCapacity"] !== null) {
            $this->KnowledgeCapacity = $param["KnowledgeCapacity"];
        }

        if (array_key_exists("KnowledgeUsage",$param) and $param["KnowledgeUsage"] !== null) {
            $this->KnowledgeUsage = $param["KnowledgeUsage"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }
    }
}
