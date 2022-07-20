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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkAclEntries请求参数结构体
 *
 * @method string getNetworkAclId() 获取网络ACL实例ID。例如：acl-12345678。
 * @method void setNetworkAclId(string $NetworkAclId) 设置网络ACL实例ID。例如：acl-12345678。
 * @method NetworkAclEntrySet getNetworkAclEntrySet() 获取网络ACL规则集。NetworkAclEntrySet和NetworkAclQuintupleSet只能输入一个。
 * @method void setNetworkAclEntrySet(NetworkAclEntrySet $NetworkAclEntrySet) 设置网络ACL规则集。NetworkAclEntrySet和NetworkAclQuintupleSet只能输入一个。
 * @method NetworkAclQuintupleEntries getNetworkAclQuintupleSet() 获取网络ACL五元组规则集。NetworkAclEntrySet和NetworkAclQuintupleSet只能输入一个。
 * @method void setNetworkAclQuintupleSet(NetworkAclQuintupleEntries $NetworkAclQuintupleSet) 设置网络ACL五元组规则集。NetworkAclEntrySet和NetworkAclQuintupleSet只能输入一个。
 */
class ModifyNetworkAclEntriesRequest extends AbstractModel
{
    /**
     * @var string 网络ACL实例ID。例如：acl-12345678。
     */
    public $NetworkAclId;

    /**
     * @var NetworkAclEntrySet 网络ACL规则集。NetworkAclEntrySet和NetworkAclQuintupleSet只能输入一个。
     */
    public $NetworkAclEntrySet;

    /**
     * @var NetworkAclQuintupleEntries 网络ACL五元组规则集。NetworkAclEntrySet和NetworkAclQuintupleSet只能输入一个。
     */
    public $NetworkAclQuintupleSet;

    /**
     * @param string $NetworkAclId 网络ACL实例ID。例如：acl-12345678。
     * @param NetworkAclEntrySet $NetworkAclEntrySet 网络ACL规则集。NetworkAclEntrySet和NetworkAclQuintupleSet只能输入一个。
     * @param NetworkAclQuintupleEntries $NetworkAclQuintupleSet 网络ACL五元组规则集。NetworkAclEntrySet和NetworkAclQuintupleSet只能输入一个。
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
        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            $this->NetworkAclId = $param["NetworkAclId"];
        }

        if (array_key_exists("NetworkAclEntrySet",$param) and $param["NetworkAclEntrySet"] !== null) {
            $this->NetworkAclEntrySet = new NetworkAclEntrySet();
            $this->NetworkAclEntrySet->deserialize($param["NetworkAclEntrySet"]);
        }

        if (array_key_exists("NetworkAclQuintupleSet",$param) and $param["NetworkAclQuintupleSet"] !== null) {
            $this->NetworkAclQuintupleSet = new NetworkAclQuintupleEntries();
            $this->NetworkAclQuintupleSet->deserialize($param["NetworkAclQuintupleSet"]);
        }
    }
}
