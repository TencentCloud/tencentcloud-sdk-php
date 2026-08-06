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
 * 资源包中包含的资源。
 *
 * @method string getResourceType() 获取<p>资源类型。</p><p>枚举值：</p><ul><li>Storage： 存储资源</li><li>Traffic： 流量资源</li><li>Transcode： 转码资源</li><li>TESHD： 极速高清转码资源</li><li>Review： 音视频审核资源</li><li>MediaProcess： 媒体处理资源</li><li>MLLMMediaProcess： 大模型媒体处理资源</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型。</p><p>枚举值：</p><ul><li>Storage： 存储资源</li><li>Traffic： 流量资源</li><li>Transcode： 转码资源</li><li>TESHD： 极速高清转码资源</li><li>Review： 音视频审核资源</li><li>MediaProcess： 媒体处理资源</li><li>MLLMMediaProcess： 大模型媒体处理资源</li></ul>
 * @method integer getAmount() 获取<p>资源包额度。</p><li>音视频存储资源包，单位为字节。</li><li>音视频转码资源包，单位为秒。</li><li>音视频审核资源包，单位为秒。</li><li>音视频极速高清资源包，单位为秒。</li><li>音视频加速资源包，单位为字节。</li><li>媒体处理时长资源包，单位为秒。</li>
 * @method void setAmount(integer $Amount) 设置<p>资源包额度。</p><li>音视频存储资源包，单位为字节。</li><li>音视频转码资源包，单位为秒。</li><li>音视频审核资源包，单位为秒。</li><li>音视频极速高清资源包，单位为秒。</li><li>音视频加速资源包，单位为字节。</li><li>媒体处理时长资源包，单位为秒。</li>
 * @method integer getLeft() 获取<p>资源包余量。</p><li>音视频存储资源包，单位为字节。</li><li>音视频转码资源包，单位为秒。</li><li>音视频审核资源包，单位为秒。</li><li>音视频极速高清资源包，单位为秒。</li><li>音视频加速资源包，单位为字节。</li><li>媒体处理时长资源包，单位为秒。</li>
 * @method void setLeft(integer $Left) 设置<p>资源包余量。</p><li>音视频存储资源包，单位为字节。</li><li>音视频转码资源包，单位为秒。</li><li>音视频审核资源包，单位为秒。</li><li>音视频极速高清资源包，单位为秒。</li><li>音视频加速资源包，单位为字节。</li><li>媒体处理时长资源包，单位为秒。</li>
 */
class ProductInstanceResource extends AbstractModel
{
    /**
     * @var string <p>资源类型。</p><p>枚举值：</p><ul><li>Storage： 存储资源</li><li>Traffic： 流量资源</li><li>Transcode： 转码资源</li><li>TESHD： 极速高清转码资源</li><li>Review： 音视频审核资源</li><li>MediaProcess： 媒体处理资源</li><li>MLLMMediaProcess： 大模型媒体处理资源</li></ul>
     */
    public $ResourceType;

    /**
     * @var integer <p>资源包额度。</p><li>音视频存储资源包，单位为字节。</li><li>音视频转码资源包，单位为秒。</li><li>音视频审核资源包，单位为秒。</li><li>音视频极速高清资源包，单位为秒。</li><li>音视频加速资源包，单位为字节。</li><li>媒体处理时长资源包，单位为秒。</li>
     */
    public $Amount;

    /**
     * @var integer <p>资源包余量。</p><li>音视频存储资源包，单位为字节。</li><li>音视频转码资源包，单位为秒。</li><li>音视频审核资源包，单位为秒。</li><li>音视频极速高清资源包，单位为秒。</li><li>音视频加速资源包，单位为字节。</li><li>媒体处理时长资源包，单位为秒。</li>
     */
    public $Left;

    /**
     * @param string $ResourceType <p>资源类型。</p><p>枚举值：</p><ul><li>Storage： 存储资源</li><li>Traffic： 流量资源</li><li>Transcode： 转码资源</li><li>TESHD： 极速高清转码资源</li><li>Review： 音视频审核资源</li><li>MediaProcess： 媒体处理资源</li><li>MLLMMediaProcess： 大模型媒体处理资源</li></ul>
     * @param integer $Amount <p>资源包额度。</p><li>音视频存储资源包，单位为字节。</li><li>音视频转码资源包，单位为秒。</li><li>音视频审核资源包，单位为秒。</li><li>音视频极速高清资源包，单位为秒。</li><li>音视频加速资源包，单位为字节。</li><li>媒体处理时长资源包，单位为秒。</li>
     * @param integer $Left <p>资源包余量。</p><li>音视频存储资源包，单位为字节。</li><li>音视频转码资源包，单位为秒。</li><li>音视频审核资源包，单位为秒。</li><li>音视频极速高清资源包，单位为秒。</li><li>音视频加速资源包，单位为字节。</li><li>媒体处理时长资源包，单位为秒。</li>
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("Left",$param) and $param["Left"] !== null) {
            $this->Left = $param["Left"];
        }
    }
}
