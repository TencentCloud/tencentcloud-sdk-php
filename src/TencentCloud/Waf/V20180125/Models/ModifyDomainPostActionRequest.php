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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainPostAction请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getPostCLSAction() 获取0-关闭投递，1-开启投递
 * @method void setPostCLSAction(integer $PostCLSAction) 设置0-关闭投递，1-开启投递
 * @method integer getPostCKafkaAction() 获取0-关闭投递，1-开启投递
 * @method void setPostCKafkaAction(integer $PostCKafkaAction) 设置0-关闭投递，1-开启投递
 */
class ModifyDomainPostActionRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 0-关闭投递，1-开启投递
     */
    public $PostCLSAction;

    /**
     * @var integer 0-关闭投递，1-开启投递
     */
    public $PostCKafkaAction;

    /**
     * @param string $Domain 域名
     * @param integer $PostCLSAction 0-关闭投递，1-开启投递
     * @param integer $PostCKafkaAction 0-关闭投递，1-开启投递
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("PostCLSAction",$param) and $param["PostCLSAction"] !== null) {
            $this->PostCLSAction = $param["PostCLSAction"];
        }

        if (array_key_exists("PostCKafkaAction",$param) and $param["PostCKafkaAction"] !== null) {
            $this->PostCKafkaAction = $param["PostCKafkaAction"];
        }
    }
}
