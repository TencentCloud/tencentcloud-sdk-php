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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 广交会用户信息
 *
 * @method string getStrDesc() 获取消息发表人简介，非必填，如填写，会结合简介内容判定该条是否有害。评论消息如展示简介则建议填写。
 * @method void setStrDesc(string $StrDesc) 设置消息发表人简介，非必填，如填写，会结合简介内容判定该条是否有害。评论消息如展示简介则建议填写。
 * @method string getStrHeadUrl() 获取消息发表人头像url，非必填，如填写，头像有害，该条消息会被判断为有害。评论消息如展示头像则建议填写。
 * @method void setStrHeadUrl(string $StrHeadUrl) 设置消息发表人头像url，非必填，如填写，头像有害，该条消息会被判断为有害。评论消息如展示头像则建议填写。
 * @method string getStrNick() 获取消息发表人昵称，非必填，如填写，会结合昵称信息判断该条内容是否有害。评论消息如展示昵称则建议填写。
 * @method void setStrNick(string $StrNick) 设置消息发表人昵称，非必填，如填写，会结合昵称信息判断该条内容是否有害。评论消息如展示昵称则建议填写。
 * @method string getStrUin() 获取发表评论账号ID，如填写，会根据账号历史恶意情况，判定消息有害结果.
 * @method void setStrUin(string $StrUin) 设置发表评论账号ID，如填写，会根据账号历史恶意情况，判定消息有害结果.
 * @method integer getUiAcntType() 获取1-微信uin 2-QQ号 3-微信群uin 4-qq群号 5-微信openid 6-QQopenid 7-其它string
 * @method void setUiAcntType(integer $UiAcntType) 设置1-微信uin 2-QQ号 3-微信群uin 4-qq群号 5-微信openid 6-QQopenid 7-其它string
 */
class UserInfoGjh extends AbstractModel
{
    /**
     * @var string 消息发表人简介，非必填，如填写，会结合简介内容判定该条是否有害。评论消息如展示简介则建议填写。
     */
    public $StrDesc;

    /**
     * @var string 消息发表人头像url，非必填，如填写，头像有害，该条消息会被判断为有害。评论消息如展示头像则建议填写。
     */
    public $StrHeadUrl;

    /**
     * @var string 消息发表人昵称，非必填，如填写，会结合昵称信息判断该条内容是否有害。评论消息如展示昵称则建议填写。
     */
    public $StrNick;

    /**
     * @var string 发表评论账号ID，如填写，会根据账号历史恶意情况，判定消息有害结果.
     */
    public $StrUin;

    /**
     * @var integer 1-微信uin 2-QQ号 3-微信群uin 4-qq群号 5-微信openid 6-QQopenid 7-其它string
     */
    public $UiAcntType;

    /**
     * @param string $StrDesc 消息发表人简介，非必填，如填写，会结合简介内容判定该条是否有害。评论消息如展示简介则建议填写。
     * @param string $StrHeadUrl 消息发表人头像url，非必填，如填写，头像有害，该条消息会被判断为有害。评论消息如展示头像则建议填写。
     * @param string $StrNick 消息发表人昵称，非必填，如填写，会结合昵称信息判断该条内容是否有害。评论消息如展示昵称则建议填写。
     * @param string $StrUin 发表评论账号ID，如填写，会根据账号历史恶意情况，判定消息有害结果.
     * @param integer $UiAcntType 1-微信uin 2-QQ号 3-微信群uin 4-qq群号 5-微信openid 6-QQopenid 7-其它string
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
        if (array_key_exists("StrDesc",$param) and $param["StrDesc"] !== null) {
            $this->StrDesc = $param["StrDesc"];
        }

        if (array_key_exists("StrHeadUrl",$param) and $param["StrHeadUrl"] !== null) {
            $this->StrHeadUrl = $param["StrHeadUrl"];
        }

        if (array_key_exists("StrNick",$param) and $param["StrNick"] !== null) {
            $this->StrNick = $param["StrNick"];
        }

        if (array_key_exists("StrUin",$param) and $param["StrUin"] !== null) {
            $this->StrUin = $param["StrUin"];
        }

        if (array_key_exists("UiAcntType",$param) and $param["UiAcntType"] !== null) {
            $this->UiAcntType = $param["UiAcntType"];
        }
    }
}
