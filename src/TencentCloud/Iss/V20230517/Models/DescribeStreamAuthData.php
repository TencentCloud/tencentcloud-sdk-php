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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询推拉流鉴权返回数据结构
 *
 * @method string getId() 获取<p>鉴权配置ID（uuid）</p>
 * @method void setId(string $Id) 设置<p>鉴权配置ID（uuid）</p>
 * @method integer getPullState() 获取<p>是否开播放鉴权（1:开启,0:关闭）</p>
 * @method void setPullState(integer $PullState) 设置<p>是否开播放鉴权（1:开启,0:关闭）</p>
 * @method string getPullSecret() 获取<p>播放密钥（仅支持字母数字，长度0-10位）</p>
 * @method void setPullSecret(string $PullSecret) 设置<p>播放密钥（仅支持字母数字，长度0-10位）</p>
 * @method integer getPullExpired() 获取<p>播放过期时间（单位：分钟）</p>
 * @method void setPullExpired(integer $PullExpired) 设置<p>播放过期时间（单位：分钟）</p>
 * @method integer getPushState() 获取<p>是否开启推流鉴权（1:开启,0:关闭）</p>
 * @method void setPushState(integer $PushState) 设置<p>是否开启推流鉴权（1:开启,0:关闭）</p>
 * @method string getPushSecret() 获取<p>推流密钥（仅支持字母数字，长度0-10位）</p>
 * @method void setPushSecret(string $PushSecret) 设置<p>推流密钥（仅支持字母数字，长度0-10位）</p>
 * @method integer getPushExpired() 获取<p>推流过期时间（单位：分钟）</p>
 * @method void setPushExpired(integer $PushExpired) 设置<p>推流过期时间（单位：分钟）</p>
 * @method integer getAppId() 获取<p>用户ID</p>
 * @method void setAppId(integer $AppId) 设置<p>用户ID</p>
 * @method array getExcludePushDomainIds() 获取<p>不生效推流鉴权的域名 ID 列表</p>
 * @method void setExcludePushDomainIds(array $ExcludePushDomainIds) 设置<p>不生效推流鉴权的域名 ID 列表</p>
 */
class DescribeStreamAuthData extends AbstractModel
{
    /**
     * @var string <p>鉴权配置ID（uuid）</p>
     */
    public $Id;

    /**
     * @var integer <p>是否开播放鉴权（1:开启,0:关闭）</p>
     */
    public $PullState;

    /**
     * @var string <p>播放密钥（仅支持字母数字，长度0-10位）</p>
     */
    public $PullSecret;

    /**
     * @var integer <p>播放过期时间（单位：分钟）</p>
     */
    public $PullExpired;

    /**
     * @var integer <p>是否开启推流鉴权（1:开启,0:关闭）</p>
     */
    public $PushState;

    /**
     * @var string <p>推流密钥（仅支持字母数字，长度0-10位）</p>
     */
    public $PushSecret;

    /**
     * @var integer <p>推流过期时间（单位：分钟）</p>
     */
    public $PushExpired;

    /**
     * @var integer <p>用户ID</p>
     */
    public $AppId;

    /**
     * @var array <p>不生效推流鉴权的域名 ID 列表</p>
     */
    public $ExcludePushDomainIds;

    /**
     * @param string $Id <p>鉴权配置ID（uuid）</p>
     * @param integer $PullState <p>是否开播放鉴权（1:开启,0:关闭）</p>
     * @param string $PullSecret <p>播放密钥（仅支持字母数字，长度0-10位）</p>
     * @param integer $PullExpired <p>播放过期时间（单位：分钟）</p>
     * @param integer $PushState <p>是否开启推流鉴权（1:开启,0:关闭）</p>
     * @param string $PushSecret <p>推流密钥（仅支持字母数字，长度0-10位）</p>
     * @param integer $PushExpired <p>推流过期时间（单位：分钟）</p>
     * @param integer $AppId <p>用户ID</p>
     * @param array $ExcludePushDomainIds <p>不生效推流鉴权的域名 ID 列表</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PullState",$param) and $param["PullState"] !== null) {
            $this->PullState = $param["PullState"];
        }

        if (array_key_exists("PullSecret",$param) and $param["PullSecret"] !== null) {
            $this->PullSecret = $param["PullSecret"];
        }

        if (array_key_exists("PullExpired",$param) and $param["PullExpired"] !== null) {
            $this->PullExpired = $param["PullExpired"];
        }

        if (array_key_exists("PushState",$param) and $param["PushState"] !== null) {
            $this->PushState = $param["PushState"];
        }

        if (array_key_exists("PushSecret",$param) and $param["PushSecret"] !== null) {
            $this->PushSecret = $param["PushSecret"];
        }

        if (array_key_exists("PushExpired",$param) and $param["PushExpired"] !== null) {
            $this->PushExpired = $param["PushExpired"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ExcludePushDomainIds",$param) and $param["ExcludePushDomainIds"] !== null) {
            $this->ExcludePushDomainIds = $param["ExcludePushDomainIds"];
        }
    }
}
