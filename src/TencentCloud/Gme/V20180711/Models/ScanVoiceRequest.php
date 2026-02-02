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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanVoice请求参数结构体
 *
 * @method integer getBizId() 获取<p>应用ID，登录<a href="https://console.cloud.tencent.com/gamegme">控制台 - 服务管理</a>创建应用得到的AppID</p>
 * @method void setBizId(integer $BizId) 设置<p>应用ID，登录<a href="https://console.cloud.tencent.com/gamegme">控制台 - 服务管理</a>创建应用得到的AppID</p>
 * @method array getScenes() 获取<p>语音检测场景，参数值目前要求为 default。 预留场景设置： 谩骂、色情、广告、违禁等场景，<a href="#Label_Value">具体取值见上述 Label 说明。</a></p>
 * @method void setScenes(array $Scenes) 设置<p>语音检测场景，参数值目前要求为 default。 预留场景设置： 谩骂、色情、广告、违禁等场景，<a href="#Label_Value">具体取值见上述 Label 说明。</a></p>
 * @method boolean getLive() 获取<p>是否为直播流。值为 false 时表示普通语音文件检测；为 true 时表示语音流检测。</p>
 * @method void setLive(boolean $Live) 设置<p>是否为直播流。值为 false 时表示普通语音文件检测；为 true 时表示语音流检测。</p>
 * @method array getTasks() 获取<p>语音检测任务列表，列表最多支持100个检测任务。结构体中包含：</p><li>DataId：数据的唯一ID</li><li>Url：数据文件的url，为 urlencode 编码，流式则为拉流地址</li>
 * @method void setTasks(array $Tasks) 设置<p>语音检测任务列表，列表最多支持100个检测任务。结构体中包含：</p><li>DataId：数据的唯一ID</li><li>Url：数据文件的url，为 urlencode 编码，流式则为拉流地址</li>
 * @method string getCallback() 获取<p>异步检测结果回调地址，具体见上述<a href="#Callback_Declare">回调相关说明</a>。（说明：该字段为空时，必须通过接口(查询语音检测结果)获取检测结果）。</p>
 * @method void setCallback(string $Callback) 设置<p>异步检测结果回调地址，具体见上述<a href="#Callback_Declare">回调相关说明</a>。（说明：该字段为空时，必须通过接口(查询语音检测结果)获取检测结果）。</p>
 * @method string getLang() 获取<p>语种，不传默认中文</p>
 * @method void setLang(string $Lang) 设置<p>语种，不传默认中文</p>
 */
class ScanVoiceRequest extends AbstractModel
{
    /**
     * @var integer <p>应用ID，登录<a href="https://console.cloud.tencent.com/gamegme">控制台 - 服务管理</a>创建应用得到的AppID</p>
     */
    public $BizId;

    /**
     * @var array <p>语音检测场景，参数值目前要求为 default。 预留场景设置： 谩骂、色情、广告、违禁等场景，<a href="#Label_Value">具体取值见上述 Label 说明。</a></p>
     */
    public $Scenes;

    /**
     * @var boolean <p>是否为直播流。值为 false 时表示普通语音文件检测；为 true 时表示语音流检测。</p>
     */
    public $Live;

    /**
     * @var array <p>语音检测任务列表，列表最多支持100个检测任务。结构体中包含：</p><li>DataId：数据的唯一ID</li><li>Url：数据文件的url，为 urlencode 编码，流式则为拉流地址</li>
     */
    public $Tasks;

    /**
     * @var string <p>异步检测结果回调地址，具体见上述<a href="#Callback_Declare">回调相关说明</a>。（说明：该字段为空时，必须通过接口(查询语音检测结果)获取检测结果）。</p>
     */
    public $Callback;

    /**
     * @var string <p>语种，不传默认中文</p>
     */
    public $Lang;

    /**
     * @param integer $BizId <p>应用ID，登录<a href="https://console.cloud.tencent.com/gamegme">控制台 - 服务管理</a>创建应用得到的AppID</p>
     * @param array $Scenes <p>语音检测场景，参数值目前要求为 default。 预留场景设置： 谩骂、色情、广告、违禁等场景，<a href="#Label_Value">具体取值见上述 Label 说明。</a></p>
     * @param boolean $Live <p>是否为直播流。值为 false 时表示普通语音文件检测；为 true 时表示语音流检测。</p>
     * @param array $Tasks <p>语音检测任务列表，列表最多支持100个检测任务。结构体中包含：</p><li>DataId：数据的唯一ID</li><li>Url：数据文件的url，为 urlencode 编码，流式则为拉流地址</li>
     * @param string $Callback <p>异步检测结果回调地址，具体见上述<a href="#Callback_Declare">回调相关说明</a>。（说明：该字段为空时，必须通过接口(查询语音检测结果)获取检测结果）。</p>
     * @param string $Lang <p>语种，不传默认中文</p>
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }

        if (array_key_exists("Live",$param) and $param["Live"] !== null) {
            $this->Live = $param["Live"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new Task();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = $param["Callback"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }
    }
}
