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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAddressUnsubscribeConfig请求参数结构体
 *
 * @method string getAddress() 获取发信地址
 * @method void setAddress(string $Address) 设置发信地址
 * @method string getUnsubscribeConfig() 获取退订链接选项 0: 不加入退订链接 1: 简体中文 2: 英文 3: 繁体中文 4: 西班牙语 5: 法语 6: 德语 7: 日语 8: 韩语 9: 阿拉伯语 10: 泰语
 * @method void setUnsubscribeConfig(string $UnsubscribeConfig) 设置退订链接选项 0: 不加入退订链接 1: 简体中文 2: 英文 3: 繁体中文 4: 西班牙语 5: 法语 6: 德语 7: 日语 8: 韩语 9: 阿拉伯语 10: 泰语
 * @method integer getStatus() 获取0:关闭配置，1:打开配置
 * @method void setStatus(integer $Status) 设置0:关闭配置，1:打开配置
 */
class UpdateAddressUnsubscribeConfigRequest extends AbstractModel
{
    /**
     * @var string 发信地址
     */
    public $Address;

    /**
     * @var string 退订链接选项 0: 不加入退订链接 1: 简体中文 2: 英文 3: 繁体中文 4: 西班牙语 5: 法语 6: 德语 7: 日语 8: 韩语 9: 阿拉伯语 10: 泰语
     */
    public $UnsubscribeConfig;

    /**
     * @var integer 0:关闭配置，1:打开配置
     */
    public $Status;

    /**
     * @param string $Address 发信地址
     * @param string $UnsubscribeConfig 退订链接选项 0: 不加入退订链接 1: 简体中文 2: 英文 3: 繁体中文 4: 西班牙语 5: 法语 6: 德语 7: 日语 8: 韩语 9: 阿拉伯语 10: 泰语
     * @param integer $Status 0:关闭配置，1:打开配置
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("UnsubscribeConfig",$param) and $param["UnsubscribeConfig"] !== null) {
            $this->UnsubscribeConfig = $param["UnsubscribeConfig"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
