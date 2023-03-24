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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播转直播项目输入信息。
 *
 * @method array getSourceInfos() 获取输入源列表。输入源列表最大个数为100.
 * @method void setSourceInfos(array $SourceInfos) 设置输入源列表。输入源列表最大个数为100.
 * @method array getDestinationInfos() 获取输出源列表。输出源列表最大个数为10.
 * @method void setDestinationInfos(array $DestinationInfos) 设置输出源列表。输出源列表最大个数为10.
 * @method MediaCastOutputMediaSetting getOutputMediaSetting() 获取输出媒体配置。
 * @method void setOutputMediaSetting(MediaCastOutputMediaSetting $OutputMediaSetting) 设置输出媒体配置。
 * @method MediaCastPlaySetting getPlaySetting() 获取播放控制参数。
 * @method void setPlaySetting(MediaCastPlaySetting $PlaySetting) 设置播放控制参数。
 */
class MediaCastProjectInput extends AbstractModel
{
    /**
     * @var array 输入源列表。输入源列表最大个数为100.
     */
    public $SourceInfos;

    /**
     * @var array 输出源列表。输出源列表最大个数为10.
     */
    public $DestinationInfos;

    /**
     * @var MediaCastOutputMediaSetting 输出媒体配置。
     */
    public $OutputMediaSetting;

    /**
     * @var MediaCastPlaySetting 播放控制参数。
     */
    public $PlaySetting;

    /**
     * @param array $SourceInfos 输入源列表。输入源列表最大个数为100.
     * @param array $DestinationInfos 输出源列表。输出源列表最大个数为10.
     * @param MediaCastOutputMediaSetting $OutputMediaSetting 输出媒体配置。
     * @param MediaCastPlaySetting $PlaySetting 播放控制参数。
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
        if (array_key_exists("SourceInfos",$param) and $param["SourceInfos"] !== null) {
            $this->SourceInfos = [];
            foreach ($param["SourceInfos"] as $key => $value){
                $obj = new MediaCastSourceInfo();
                $obj->deserialize($value);
                array_push($this->SourceInfos, $obj);
            }
        }

        if (array_key_exists("DestinationInfos",$param) and $param["DestinationInfos"] !== null) {
            $this->DestinationInfos = [];
            foreach ($param["DestinationInfos"] as $key => $value){
                $obj = new MediaCastDestinationInfo();
                $obj->deserialize($value);
                array_push($this->DestinationInfos, $obj);
            }
        }

        if (array_key_exists("OutputMediaSetting",$param) and $param["OutputMediaSetting"] !== null) {
            $this->OutputMediaSetting = new MediaCastOutputMediaSetting();
            $this->OutputMediaSetting->deserialize($param["OutputMediaSetting"]);
        }

        if (array_key_exists("PlaySetting",$param) and $param["PlaySetting"] !== null) {
            $this->PlaySetting = new MediaCastPlaySetting();
            $this->PlaySetting->deserialize($param["PlaySetting"]);
        }
    }
}
