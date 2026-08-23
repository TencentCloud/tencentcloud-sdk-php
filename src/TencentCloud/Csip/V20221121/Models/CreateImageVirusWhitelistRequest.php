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
 * CreateImageVirusWhitelist请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getMd5List() 获取<p>木马白名单md5</p>
 * @method void setMd5List(array $Md5List) 设置<p>木马白名单md5</p>
 * @method integer getScope() 获取<p>白名单生效范围</p><p>枚举值：</p><ul><li>0： 自选镜像</li><li>1： 全部镜像</li></ul>
 * @method void setScope(integer $Scope) 设置<p>白名单生效范围</p><p>枚举值：</p><ul><li>0： 自选镜像</li><li>1： 全部镜像</li></ul>
 * @method array getImageIds() 获取<p>镜像id</p>
 * @method void setImageIds(array $ImageIds) 设置<p>镜像id</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method array getVirusId() 获取<p>木马id</p>
 * @method void setVirusId(array $VirusId) 设置<p>木马id</p>
 * @method string getName() 获取<p>木马白名单名</p>
 * @method void setName(string $Name) 设置<p>木马白名单名</p>
 * @method integer getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>0： 禁用</li><li>1： 启用</li></ul>
 * @method void setStatus(integer $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>0： 禁用</li><li>1： 启用</li></ul>
 */
class CreateImageVirusWhitelistRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>木马白名单md5</p>
     */
    public $Md5List;

    /**
     * @var integer <p>白名单生效范围</p><p>枚举值：</p><ul><li>0： 自选镜像</li><li>1： 全部镜像</li></ul>
     */
    public $Scope;

    /**
     * @var array <p>镜像id</p>
     */
    public $ImageIds;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var array <p>木马id</p>
     */
    public $VirusId;

    /**
     * @var string <p>木马白名单名</p>
     */
    public $Name;

    /**
     * @var integer <p>状态</p><p>枚举值：</p><ul><li>0： 禁用</li><li>1： 启用</li></ul>
     */
    public $Status;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Md5List <p>木马白名单md5</p>
     * @param integer $Scope <p>白名单生效范围</p><p>枚举值：</p><ul><li>0： 自选镜像</li><li>1： 全部镜像</li></ul>
     * @param array $ImageIds <p>镜像id</p>
     * @param string $Remark <p>备注</p>
     * @param array $VirusId <p>木马id</p>
     * @param string $Name <p>木马白名单名</p>
     * @param integer $Status <p>状态</p><p>枚举值：</p><ul><li>0： 禁用</li><li>1： 启用</li></ul>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Md5List",$param) and $param["Md5List"] !== null) {
            $this->Md5List = $param["Md5List"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("VirusId",$param) and $param["VirusId"] !== null) {
            $this->VirusId = $param["VirusId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
