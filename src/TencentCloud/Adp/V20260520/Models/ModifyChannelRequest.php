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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyChannel请求参数结构体
 *
 * @method string getAppId() 获取<p>应用业务ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用业务ID</p>
 * @method string getChannelId() 获取<p>渠道业务ID</p>
 * @method void setChannelId(string $ChannelId) 设置<p>渠道业务ID</p>
 * @method integer getScene() 获取<p>渠道场景：0-B端场景，1-C端场景</p>
 * @method void setScene(integer $Scene) 设置<p>渠道场景：0-B端场景，1-C端场景</p>
 * @method ChannelSpec getSpec() 获取<p>待更新的渠道规格</p>
 * @method void setSpec(ChannelSpec $Spec) 设置<p>待更新的渠道规格</p>
 * @method FieldMask getUpdateMask() 获取<p>更新字段掩码,<br>B端(Scene=0)：支持：【spec.description&quot; ,&quot;spec.wecom_robot.callback.wecom_robot_id&quot;】<br>C端(Scene=1)：支持：【&quot;spec.description&quot; , &quot;spec.wecom_robot.websocket.bot_id&quot; ,&quot;spec.wecom_robot.websocket.bot_secret&quot;】</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) 设置<p>更新字段掩码,<br>B端(Scene=0)：支持：【spec.description&quot; ,&quot;spec.wecom_robot.callback.wecom_robot_id&quot;】<br>C端(Scene=1)：支持：【&quot;spec.description&quot; , &quot;spec.wecom_robot.websocket.bot_id&quot; ,&quot;spec.wecom_robot.websocket.bot_secret&quot;】</p>
 */
class ModifyChannelRequest extends AbstractModel
{
    /**
     * @var string <p>应用业务ID</p>
     */
    public $AppId;

    /**
     * @var string <p>渠道业务ID</p>
     */
    public $ChannelId;

    /**
     * @var integer <p>渠道场景：0-B端场景，1-C端场景</p>
     */
    public $Scene;

    /**
     * @var ChannelSpec <p>待更新的渠道规格</p>
     */
    public $Spec;

    /**
     * @var FieldMask <p>更新字段掩码,<br>B端(Scene=0)：支持：【spec.description&quot; ,&quot;spec.wecom_robot.callback.wecom_robot_id&quot;】<br>C端(Scene=1)：支持：【&quot;spec.description&quot; , &quot;spec.wecom_robot.websocket.bot_id&quot; ,&quot;spec.wecom_robot.websocket.bot_secret&quot;】</p>
     */
    public $UpdateMask;

    /**
     * @param string $AppId <p>应用业务ID</p>
     * @param string $ChannelId <p>渠道业务ID</p>
     * @param integer $Scene <p>渠道场景：0-B端场景，1-C端场景</p>
     * @param ChannelSpec $Spec <p>待更新的渠道规格</p>
     * @param FieldMask $UpdateMask <p>更新字段掩码,<br>B端(Scene=0)：支持：【spec.description&quot; ,&quot;spec.wecom_robot.callback.wecom_robot_id&quot;】<br>C端(Scene=1)：支持：【&quot;spec.description&quot; , &quot;spec.wecom_robot.websocket.bot_id&quot; ,&quot;spec.wecom_robot.websocket.bot_secret&quot;】</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new ChannelSpec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }
    }
}
