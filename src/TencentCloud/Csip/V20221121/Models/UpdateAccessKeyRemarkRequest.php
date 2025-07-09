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
 * UpdateAccessKeyRemark请求参数结构体
 *
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method array getSourceIPList() 获取源IP 名称
 * @method void setSourceIPList(array $SourceIPList) 设置源IP 名称
 * @method array getAccessKeyList() 获取ak名称
 * @method void setAccessKeyList(array $AccessKeyList) 设置ak名称
 * @method array getSourceIPIDList() 获取源IP的ID
 * @method void setSourceIPIDList(array $SourceIPIDList) 设置源IP的ID
 * @method array getAccessKeyIDList() 获取AK的ID
 * @method void setAccessKeyIDList(array $AccessKeyIDList) 设置AK的ID
 */
class UpdateAccessKeyRemarkRequest extends AbstractModel
{
    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var array 源IP 名称
     */
    public $SourceIPList;

    /**
     * @var array ak名称
     */
    public $AccessKeyList;

    /**
     * @var array 源IP的ID
     */
    public $SourceIPIDList;

    /**
     * @var array AK的ID
     */
    public $AccessKeyIDList;

    /**
     * @param string $Remark 备注
     * @param array $MemberId 集团账号的成员id
     * @param array $SourceIPList 源IP 名称
     * @param array $AccessKeyList ak名称
     * @param array $SourceIPIDList 源IP的ID
     * @param array $AccessKeyIDList AK的ID
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
        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("SourceIPList",$param) and $param["SourceIPList"] !== null) {
            $this->SourceIPList = $param["SourceIPList"];
        }

        if (array_key_exists("AccessKeyList",$param) and $param["AccessKeyList"] !== null) {
            $this->AccessKeyList = $param["AccessKeyList"];
        }

        if (array_key_exists("SourceIPIDList",$param) and $param["SourceIPIDList"] !== null) {
            $this->SourceIPIDList = $param["SourceIPIDList"];
        }

        if (array_key_exists("AccessKeyIDList",$param) and $param["AccessKeyIDList"] !== null) {
            $this->AccessKeyIDList = $param["AccessKeyIDList"];
        }
    }
}
