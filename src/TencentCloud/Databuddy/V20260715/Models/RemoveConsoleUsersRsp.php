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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量移除控制台用户响应
 *
 * @method boolean getStatus() 获取<p>请求已完成处理；即使部分失败也为 true，逐个结果以 SuccessUins/FailItems 为准</p>
 * @method void setStatus(boolean $Status) 设置<p>请求已完成处理；即使部分失败也为 true，逐个结果以 SuccessUins/FailItems 为准</p>
 * @method array getSuccessUins() 获取<p>删除成功的用户 UIN 列表</p>
 * @method void setSuccessUins(array $SuccessUins) 设置<p>删除成功的用户 UIN 列表</p>
 * @method array getFailItems() 获取<p>失败项列表（Item 为用户 UIN，FailReason 为失败原因）</p>
 * @method void setFailItems(array $FailItems) 设置<p>失败项列表（Item 为用户 UIN，FailReason 为失败原因）</p>
 */
class RemoveConsoleUsersRsp extends AbstractModel
{
    /**
     * @var boolean <p>请求已完成处理；即使部分失败也为 true，逐个结果以 SuccessUins/FailItems 为准</p>
     */
    public $Status;

    /**
     * @var array <p>删除成功的用户 UIN 列表</p>
     */
    public $SuccessUins;

    /**
     * @var array <p>失败项列表（Item 为用户 UIN，FailReason 为失败原因）</p>
     */
    public $FailItems;

    /**
     * @param boolean $Status <p>请求已完成处理；即使部分失败也为 true，逐个结果以 SuccessUins/FailItems 为准</p>
     * @param array $SuccessUins <p>删除成功的用户 UIN 列表</p>
     * @param array $FailItems <p>失败项列表（Item 为用户 UIN，FailReason 为失败原因）</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuccessUins",$param) and $param["SuccessUins"] !== null) {
            $this->SuccessUins = $param["SuccessUins"];
        }

        if (array_key_exists("FailItems",$param) and $param["FailItems"] !== null) {
            $this->FailItems = [];
            foreach ($param["FailItems"] as $key => $value){
                $obj = new CommonFailItem();
                $obj->deserialize($value);
                array_push($this->FailItems, $obj);
            }
        }
    }
}
