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
namespace TencentCloud\Evt\V20250217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutEvent请求参数结构体
 *
 * @method string getPluginId() 获取<p>插件ID</p>
 * @method void setPluginId(string $PluginId) 设置<p>插件ID</p>
 * @method string getData() 获取<p>需要推送的事件数据内容，格式为json，字段定义需要与事件中的定义一致</p>
 * @method void setData(string $Data) 设置<p>需要推送的事件数据内容，格式为json，字段定义需要与事件中的定义一致</p>
 * @method string getSource() 获取<p>数据推送来源，会在生成的单据中展示数据来源</p>
 * @method void setSource(string $Source) 设置<p>数据推送来源，会在生成的单据中展示数据来源</p>
 * @method integer getTargetUin() 获取<p>可以接受当前消息的Uin</p>
 * @method void setTargetUin(integer $TargetUin) 设置<p>可以接受当前消息的Uin</p>
 */
class PutEventRequest extends AbstractModel
{
    /**
     * @var string <p>插件ID</p>
     */
    public $PluginId;

    /**
     * @var string <p>需要推送的事件数据内容，格式为json，字段定义需要与事件中的定义一致</p>
     */
    public $Data;

    /**
     * @var string <p>数据推送来源，会在生成的单据中展示数据来源</p>
     */
    public $Source;

    /**
     * @var integer <p>可以接受当前消息的Uin</p>
     */
    public $TargetUin;

    /**
     * @param string $PluginId <p>插件ID</p>
     * @param string $Data <p>需要推送的事件数据内容，格式为json，字段定义需要与事件中的定义一致</p>
     * @param string $Source <p>数据推送来源，会在生成的单据中展示数据来源</p>
     * @param integer $TargetUin <p>可以接受当前消息的Uin</p>
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }
    }
}
