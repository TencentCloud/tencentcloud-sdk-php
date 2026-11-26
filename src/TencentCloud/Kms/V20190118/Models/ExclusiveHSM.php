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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独享版集群
 *
 * @method string getHsmClusterId() 获取<p>独享集群Id</p>
 * @method void setHsmClusterId(string $HsmClusterId) 设置<p>独享集群Id</p>
 * @method string getHsmClusterName() 获取<p>独享集群名称</p>
 * @method void setHsmClusterName(string $HsmClusterName) 设置<p>独享集群名称</p>
 * @method integer getCmkUserCount() 获取<p>根密钥的使用量</p><p>单位：个</p>
 * @method void setCmkUserCount(integer $CmkUserCount) 设置<p>根密钥的使用量</p><p>单位：个</p>
 * @method integer getCmkLimit() 获取<p>根密钥的额度</p><p>单位：个</p>
 * @method void setCmkLimit(integer $CmkLimit) 设置<p>根密钥的额度</p><p>单位：个</p>
 */
class ExclusiveHSM extends AbstractModel
{
    /**
     * @var string <p>独享集群Id</p>
     */
    public $HsmClusterId;

    /**
     * @var string <p>独享集群名称</p>
     */
    public $HsmClusterName;

    /**
     * @var integer <p>根密钥的使用量</p><p>单位：个</p>
     */
    public $CmkUserCount;

    /**
     * @var integer <p>根密钥的额度</p><p>单位：个</p>
     */
    public $CmkLimit;

    /**
     * @param string $HsmClusterId <p>独享集群Id</p>
     * @param string $HsmClusterName <p>独享集群名称</p>
     * @param integer $CmkUserCount <p>根密钥的使用量</p><p>单位：个</p>
     * @param integer $CmkLimit <p>根密钥的额度</p><p>单位：个</p>
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
        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("HsmClusterName",$param) and $param["HsmClusterName"] !== null) {
            $this->HsmClusterName = $param["HsmClusterName"];
        }

        if (array_key_exists("CmkUserCount",$param) and $param["CmkUserCount"] !== null) {
            $this->CmkUserCount = $param["CmkUserCount"];
        }

        if (array_key_exists("CmkLimit",$param) and $param["CmkLimit"] !== null) {
            $this->CmkLimit = $param["CmkLimit"];
        }
    }
}
