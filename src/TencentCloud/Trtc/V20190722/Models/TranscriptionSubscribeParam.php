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
 * 转录服务订阅用户参数
 *
 * @method array getSubscribeList() 获取<p>转录用户白名单，为空或不填表示转录所有主播音频，填具体值表示转录指定主播音频。 使用黑白名单时，同一个用户同时在黑白名单时，以黑名单为主。</p>
 * @method void setSubscribeList(array $SubscribeList) 设置<p>转录用户白名单，为空或不填表示转录所有主播音频，填具体值表示转录指定主播音频。 使用黑白名单时，同一个用户同时在黑白名单时，以黑名单为主。</p>
 * @method array getUnSubscribeList() 获取<p>转录用户黑名单，为空或不填表示无黑名单，填具体值表示不转录指定主播音频。 同一个用户同时在黑白名单时，以黑名单为主。</p>
 * @method void setUnSubscribeList(array $UnSubscribeList) 设置<p>转录用户黑名单，为空或不填表示无黑名单，填具体值表示不转录指定主播音频。 同一个用户同时在黑白名单时，以黑名单为主。</p>
 */
class TranscriptionSubscribeParam extends AbstractModel
{
    /**
     * @var array <p>转录用户白名单，为空或不填表示转录所有主播音频，填具体值表示转录指定主播音频。 使用黑白名单时，同一个用户同时在黑白名单时，以黑名单为主。</p>
     */
    public $SubscribeList;

    /**
     * @var array <p>转录用户黑名单，为空或不填表示无黑名单，填具体值表示不转录指定主播音频。 同一个用户同时在黑白名单时，以黑名单为主。</p>
     */
    public $UnSubscribeList;

    /**
     * @param array $SubscribeList <p>转录用户白名单，为空或不填表示转录所有主播音频，填具体值表示转录指定主播音频。 使用黑白名单时，同一个用户同时在黑白名单时，以黑名单为主。</p>
     * @param array $UnSubscribeList <p>转录用户黑名单，为空或不填表示无黑名单，填具体值表示不转录指定主播音频。 同一个用户同时在黑白名单时，以黑名单为主。</p>
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
        if (array_key_exists("SubscribeList",$param) and $param["SubscribeList"] !== null) {
            $this->SubscribeList = [];
            foreach ($param["SubscribeList"] as $key => $value){
                $obj = new TranscriptionUserInfoParams();
                $obj->deserialize($value);
                array_push($this->SubscribeList, $obj);
            }
        }

        if (array_key_exists("UnSubscribeList",$param) and $param["UnSubscribeList"] !== null) {
            $this->UnSubscribeList = [];
            foreach ($param["UnSubscribeList"] as $key => $value){
                $obj = new TranscriptionUserInfoParams();
                $obj->deserialize($value);
                array_push($this->UnSubscribeList, $obj);
            }
        }
    }
}
