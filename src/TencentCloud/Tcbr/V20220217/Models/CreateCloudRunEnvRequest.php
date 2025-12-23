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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudRunEnv请求参数结构体
 *
 * @method string getPackageType() 获取<p>Trial,Standard,Professional,Enterprise</p>
 * @method void setPackageType(string $PackageType) 设置<p>Trial,Standard,Professional,Enterprise</p>
 * @method string getAlias() 获取<p>环境别名，要以a-z开头，不能包含 a-z,0-9,- 以外的字符</p>
 * @method void setAlias(string $Alias) 设置<p>环境别名，要以a-z开头，不能包含 a-z,0-9,- 以外的字符</p>
 * @method string getFreeQuota() 获取<p>用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。</p>
 * @method void setFreeQuota(string $FreeQuota) 设置<p>用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。</p>
 * @method string getFlag() 获取<p>订单标记。建议使用方统一转大小写之后再判断。QuickStart：快速启动来源Activity：活动来源</p>
 * @method void setFlag(string $Flag) 设置<p>订单标记。建议使用方统一转大小写之后再判断。QuickStart：快速启动来源Activity：活动来源</p>
 * @method string getVpcId() 获取<p>私有网络Id</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络Id</p>
 * @method array getSubNetIds() 获取<p>子网列表</p>
 * @method void setSubNetIds(array $SubNetIds) 设置<p>子网列表</p>
 * @method string getReqKey() 获取<p>请求key 用于防重</p>
 * @method void setReqKey(string $ReqKey) 设置<p>请求key 用于防重</p>
 * @method string getSource() 获取<p>来源：wechat | cloud | weda</p>
 * @method void setSource(string $Source) 设置<p>来源：wechat | cloud | weda</p>
 * @method string getChannel() 获取<p>渠道：wechat | cloud | weda</p>
 * @method void setChannel(string $Channel) 设置<p>渠道：wechat | cloud | weda</p>
 * @method string getEnvId() 获取<p>环境ID 云开发平台必填</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID 云开发平台必填</p>
 */
class CreateCloudRunEnvRequest extends AbstractModel
{
    /**
     * @var string <p>Trial,Standard,Professional,Enterprise</p>
     */
    public $PackageType;

    /**
     * @var string <p>环境别名，要以a-z开头，不能包含 a-z,0-9,- 以外的字符</p>
     */
    public $Alias;

    /**
     * @var string <p>用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。</p>
     */
    public $FreeQuota;

    /**
     * @var string <p>订单标记。建议使用方统一转大小写之后再判断。QuickStart：快速启动来源Activity：活动来源</p>
     */
    public $Flag;

    /**
     * @var string <p>私有网络Id</p>
     */
    public $VpcId;

    /**
     * @var array <p>子网列表</p>
     */
    public $SubNetIds;

    /**
     * @var string <p>请求key 用于防重</p>
     */
    public $ReqKey;

    /**
     * @var string <p>来源：wechat | cloud | weda</p>
     */
    public $Source;

    /**
     * @var string <p>渠道：wechat | cloud | weda</p>
     */
    public $Channel;

    /**
     * @var string <p>环境ID 云开发平台必填</p>
     */
    public $EnvId;

    /**
     * @param string $PackageType <p>Trial,Standard,Professional,Enterprise</p>
     * @param string $Alias <p>环境别名，要以a-z开头，不能包含 a-z,0-9,- 以外的字符</p>
     * @param string $FreeQuota <p>用户享有的免费额度级别，目前只能为“basic”，不传该字段或该字段为空，标识不享受免费额度。</p>
     * @param string $Flag <p>订单标记。建议使用方统一转大小写之后再判断。QuickStart：快速启动来源Activity：活动来源</p>
     * @param string $VpcId <p>私有网络Id</p>
     * @param array $SubNetIds <p>子网列表</p>
     * @param string $ReqKey <p>请求key 用于防重</p>
     * @param string $Source <p>来源：wechat | cloud | weda</p>
     * @param string $Channel <p>渠道：wechat | cloud | weda</p>
     * @param string $EnvId <p>环境ID 云开发平台必填</p>
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
