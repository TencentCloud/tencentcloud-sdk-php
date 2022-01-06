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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBindSceneChannels请求参数结构体
 *
 * @method integer getSceneId() 获取场景ID
 * @method void setSceneId(integer $SceneId) 设置场景ID
 * @method integer getType() 获取1: 绑定 2: 解绑
 * @method void setType(integer $Type) 设置1: 绑定 2: 解绑
 * @method array getChannels() 获取通道列表
 * @method void setChannels(array $Channels) 设置通道列表
 */
class ModifyBindSceneChannelsRequest extends AbstractModel
{
    /**
     * @var integer 场景ID
     */
    public $SceneId;

    /**
     * @var integer 1: 绑定 2: 解绑
     */
    public $Type;

    /**
     * @var array 通道列表
     */
    public $Channels;

    /**
     * @param integer $SceneId 场景ID
     * @param integer $Type 1: 绑定 2: 解绑
     * @param array $Channels 通道列表
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
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new ChannelItem();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }
    }
}
