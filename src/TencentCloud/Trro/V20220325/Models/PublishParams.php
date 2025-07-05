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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转推参数，一个任务最多支持10个推流URL。
 *
 * @method string getPublishUrl() 获取腾讯云直播推流地址url
 * @method void setPublishUrl(string $PublishUrl) 设置腾讯云直播推流地址url
 * @method integer getIsTencentUrl() 获取是否是腾讯云CDN，0为转推非腾讯云CDN，1为转推腾讯CDN，不携带该参数默认为1。
 * @method void setIsTencentUrl(integer $IsTencentUrl) 设置是否是腾讯云CDN，0为转推非腾讯云CDN，1为转推腾讯CDN，不携带该参数默认为1。
 */
class PublishParams extends AbstractModel
{
    /**
     * @var string 腾讯云直播推流地址url
     */
    public $PublishUrl;

    /**
     * @var integer 是否是腾讯云CDN，0为转推非腾讯云CDN，1为转推腾讯CDN，不携带该参数默认为1。
     */
    public $IsTencentUrl;

    /**
     * @param string $PublishUrl 腾讯云直播推流地址url
     * @param integer $IsTencentUrl 是否是腾讯云CDN，0为转推非腾讯云CDN，1为转推腾讯CDN，不携带该参数默认为1。
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
        if (array_key_exists("PublishUrl",$param) and $param["PublishUrl"] !== null) {
            $this->PublishUrl = $param["PublishUrl"];
        }

        if (array_key_exists("IsTencentUrl",$param) and $param["IsTencentUrl"] !== null) {
            $this->IsTencentUrl = $param["IsTencentUrl"];
        }
    }
}
