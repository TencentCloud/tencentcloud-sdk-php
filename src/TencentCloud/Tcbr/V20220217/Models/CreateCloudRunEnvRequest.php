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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudRunEnv请求参数结构体
 *
 * @method string getPackageType() 获取Trial,Standard,Professional,Enterprise
 * @method void setPackageType(string $PackageType) 设置Trial,Standard,Professional,Enterprise
 * @method string getAlias() 获取环境别名，要以a-z开头，不能包含 a-z,0-9,- 以外的字符
 * @method void setAlias(string $Alias) 设置环境别名，要以a-z开头，不能包含 a-z,0-9,- 以外的字符
 * @method string getFreeQuota() 获取用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
 * @method void setFreeQuota(string $FreeQuota) 设置用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
 * @method string getFlag() 获取订单标记。建议使用方统一转大小写之后再判断。
QuickStart：快速启动来源
Activity：活动来源
 * @method void setFlag(string $Flag) 设置订单标记。建议使用方统一转大小写之后再判断。
QuickStart：快速启动来源
Activity：活动来源
 * @method string getVpcId() 获取私有网络Id
 * @method void setVpcId(string $VpcId) 设置私有网络Id
 * @method array getSubNetIds() 获取子网列表
 * @method void setSubNetIds(array $SubNetIds) 设置子网列表
 * @method string getReqKey() 获取请求key 用于防重
 * @method void setReqKey(string $ReqKey) 设置请求key 用于防重
 * @method string getSource() 获取来源：wechat | cloud
 * @method void setSource(string $Source) 设置来源：wechat | cloud
 * @method string getChannel() 获取渠道：wechat | cloud
 * @method void setChannel(string $Channel) 设置渠道：wechat | cloud
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 */
class CreateCloudRunEnvRequest extends AbstractModel
{
    /**
     * @var string Trial,Standard,Professional,Enterprise
     */
    public $PackageType;

    /**
     * @var string 环境别名，要以a-z开头，不能包含 a-z,0-9,- 以外的字符
     */
    public $Alias;

    /**
     * @var string 用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
     */
    public $FreeQuota;

    /**
     * @var string 订单标记。建议使用方统一转大小写之后再判断。
QuickStart：快速启动来源
Activity：活动来源
     */
    public $Flag;

    /**
     * @var string 私有网络Id
     */
    public $VpcId;

    /**
     * @var array 子网列表
     */
    public $SubNetIds;

    /**
     * @var string 请求key 用于防重
     */
    public $ReqKey;

    /**
     * @var string 来源：wechat | cloud
     */
    public $Source;

    /**
     * @var string 渠道：wechat | cloud
     */
    public $Channel;

    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @param string $PackageType Trial,Standard,Professional,Enterprise
     * @param string $Alias 环境别名，要以a-z开头，不能包含 a-z,0-9,- 以外的字符
     * @param string $FreeQuota 用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。
     * @param string $Flag 订单标记。建议使用方统一转大小写之后再判断。
QuickStart：快速启动来源
Activity：活动来源
     * @param string $VpcId 私有网络Id
     * @param array $SubNetIds 子网列表
     * @param string $ReqKey 请求key 用于防重
     * @param string $Source 来源：wechat | cloud
     * @param string $Channel 渠道：wechat | cloud
     * @param string $EnvId 环境ID
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubNetIds",$param) and $param["SubNetIds"] !== null) {
            $this->SubNetIds = $param["SubNetIds"];
        }

        if (array_key_exists("ReqKey",$param) and $param["ReqKey"] !== null) {
            $this->ReqKey = $param["ReqKey"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }
    }
}
