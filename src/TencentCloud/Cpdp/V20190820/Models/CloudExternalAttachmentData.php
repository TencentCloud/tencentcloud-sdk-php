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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道透传字段
 *
 * @method string getChannelName() 获取渠道名
 * @method void setChannelName(string $ChannelName) 设置渠道名
 * @method string getAttachmentData() 获取渠道透传字段，由各个渠道自行定义
 * @method void setAttachmentData(string $AttachmentData) 设置渠道透传字段，由各个渠道自行定义
 */
class CloudExternalAttachmentData extends AbstractModel
{
    /**
     * @var string 渠道名
     */
    public $ChannelName;

    /**
     * @var string 渠道透传字段，由各个渠道自行定义
     */
    public $AttachmentData;

    /**
     * @param string $ChannelName 渠道名
     * @param string $AttachmentData 渠道透传字段，由各个渠道自行定义
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
        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("AttachmentData",$param) and $param["AttachmentData"] !== null) {
            $this->AttachmentData = $param["AttachmentData"];
        }
    }
}
