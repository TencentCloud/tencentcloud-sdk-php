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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVulReScan请求参数结构体
 *
 * @method array getVulId() 获取<p>漏洞ID</p>
 * @method void setVulId(array $VulId) 设置<p>漏洞ID</p>
 * @method array getKbNo() 获取<p>补丁编号</p>
 * @method void setKbNo(array $KbNo) 设置<p>补丁编号</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getAssetList() 获取<p>资产列表</p>
 * @method void setAssetList(array $AssetList) 设置<p>资产列表</p>
 */
class CreateVulReScanRequest extends AbstractModel
{
    /**
     * @var array <p>漏洞ID</p>
     */
    public $VulId;

    /**
     * @var array <p>补丁编号</p>
     */
    public $KbNo;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>资产列表</p>
     */
    public $AssetList;

    /**
     * @param array $VulId <p>漏洞ID</p>
     * @param array $KbNo <p>补丁编号</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $AssetList <p>资产列表</p>
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KbNo",$param) and $param["KbNo"] !== null) {
            $this->KbNo = $param["KbNo"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }
    }
}
