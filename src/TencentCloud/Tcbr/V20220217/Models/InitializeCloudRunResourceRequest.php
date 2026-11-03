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
 * InitializeCloudRunResource请求参数结构体
 *
 * @method string getEnvType() 获取<p>tcbr,run,weda,baas</p>
 * @method void setEnvType(string $EnvType) 设置<p>tcbr,run,weda,baas</p>
 * @method string getEnvId() 获取<p>环境ID 云开发平台必填</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID 云开发平台必填</p>
 * @method string getVpcId() 获取<p>私有网络Id</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络Id</p>
 * @method array getSubNetIds() 获取<p>子网列表</p>
 * @method void setSubNetIds(array $SubNetIds) 设置<p>子网列表</p>
 * @method string getSource() 获取<p>来源：wechat | cloud | weda</p>
 * @method void setSource(string $Source) 设置<p>来源：wechat | cloud | weda</p>
 * @method string getChannel() 获取<p>渠道：wechat | cloud | weda</p>
 * @method void setChannel(string $Channel) 设置<p>渠道：wechat | cloud | weda</p>
 */
class InitializeCloudRunResourceRequest extends AbstractModel
{
    /**
     * @var string <p>tcbr,run,weda,baas</p>
     */
    public $EnvType;

    /**
     * @var string <p>环境ID 云开发平台必填</p>
     */
    public $EnvId;

    /**
     * @var string <p>私有网络Id</p>
     */
    public $VpcId;

    /**
     * @var array <p>子网列表</p>
     */
    public $SubNetIds;

    /**
     * @var string <p>来源：wechat | cloud | weda</p>
     */
    public $Source;

    /**
     * @var string <p>渠道：wechat | cloud | weda</p>
     */
    public $Channel;

    /**
     * @param string $EnvType <p>tcbr,run,weda,baas</p>
     * @param string $EnvId <p>环境ID 云开发平台必填</p>
     * @param string $VpcId <p>私有网络Id</p>
     * @param array $SubNetIds <p>子网列表</p>
     * @param string $Source <p>来源：wechat | cloud | weda</p>
     * @param string $Channel <p>渠道：wechat | cloud | weda</p>
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
        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubNetIds",$param) and $param["SubNetIds"] !== null) {
            $this->SubNetIds = $param["SubNetIds"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
