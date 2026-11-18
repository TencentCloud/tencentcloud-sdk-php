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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网易云信(NERTC)频道拉流参数。传入后表示从网易云信频道内拉流审核，此时可不填 Url。
 *
 * @method string getAppKey() 获取<p>网易云信应用 AppKey</p><p>登陆云信侧控制台或联系云信获取</p>
 * @method void setAppKey(string $AppKey) 设置<p>网易云信应用 AppKey</p><p>登陆云信侧控制台或联系云信获取</p>
 * @method string getChannel() 获取<p>频道名。</p><p>非空字符串,需要和生成token使用的Channel完全一致。</p>
 * @method void setChannel(string $Channel) 设置<p>频道名。</p><p>非空字符串,需要和生成token使用的Channel完全一致。</p>
 * @method string getToken() 获取<p>用于拉流端进房安全签名</p><p>生成方式详见文档：https://doc.yunxin.163.com/nertc/server-apis/TcxNDAxMTI?platform=server#%E8%8E%B7%E5%8F%96-token，每次请求审核需要重新生成新的token。</p>
 * @method void setToken(string $Token) 设置<p>用于拉流端进房安全签名</p><p>生成方式详见文档：https://doc.yunxin.163.com/nertc/server-apis/TcxNDAxMTI?platform=server#%E8%8E%B7%E5%8F%96-token，每次请求审核需要重新生成新的token。</p>
 * @method integer getUid() 获取<p>分配进房拉流的用户ID。</p><p>和生成Token时所用 Uid 完全一致。</p>
 * @method void setUid(integer $Uid) 设置<p>分配进房拉流的用户ID。</p><p>和生成Token时所用 Uid 完全一致。</p>
 */
class NeteaseParam extends AbstractModel
{
    /**
     * @var string <p>网易云信应用 AppKey</p><p>登陆云信侧控制台或联系云信获取</p>
     */
    public $AppKey;

    /**
     * @var string <p>频道名。</p><p>非空字符串,需要和生成token使用的Channel完全一致。</p>
     */
    public $Channel;

    /**
     * @var string <p>用于拉流端进房安全签名</p><p>生成方式详见文档：https://doc.yunxin.163.com/nertc/server-apis/TcxNDAxMTI?platform=server#%E8%8E%B7%E5%8F%96-token，每次请求审核需要重新生成新的token。</p>
     */
    public $Token;

    /**
     * @var integer <p>分配进房拉流的用户ID。</p><p>和生成Token时所用 Uid 完全一致。</p>
     */
    public $Uid;

    /**
     * @param string $AppKey <p>网易云信应用 AppKey</p><p>登陆云信侧控制台或联系云信获取</p>
     * @param string $Channel <p>频道名。</p><p>非空字符串,需要和生成token使用的Channel完全一致。</p>
     * @param string $Token <p>用于拉流端进房安全签名</p><p>生成方式详见文档：https://doc.yunxin.163.com/nertc/server-apis/TcxNDAxMTI?platform=server#%E8%8E%B7%E5%8F%96-token，每次请求审核需要重新生成新的token。</p>
     * @param integer $Uid <p>分配进房拉流的用户ID。</p><p>和生成Token时所用 Uid 完全一致。</p>
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
        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }
    }
}
