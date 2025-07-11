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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微信小程序发布任务类型
 *
 * @method integer getSourceDefinition() 获取发布视频所对应的转码模板 ID，为 0 代表原始视频。
 * @method void setSourceDefinition(integer $SourceDefinition) 设置发布视频所对应的转码模板 ID，为 0 代表原始视频。
 */
class WechatMiniProgramPublishTaskInput extends AbstractModel
{
    /**
     * @var integer 发布视频所对应的转码模板 ID，为 0 代表原始视频。
     */
    public $SourceDefinition;

    /**
     * @param integer $SourceDefinition 发布视频所对应的转码模板 ID，为 0 代表原始视频。
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
        if (array_key_exists("SourceDefinition",$param) and $param["SourceDefinition"] !== null) {
            $this->SourceDefinition = $param["SourceDefinition"];
        }
    }
}
