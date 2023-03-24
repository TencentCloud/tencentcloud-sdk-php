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
 * HandleMediaCastProject请求参数结构体
 *
 * @method string getPlatform() 获取平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method void setPlatform(string $Platform) 设置平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method string getProjectId() 获取点播转直播项目 Id 。
 * @method void setProjectId(string $ProjectId) 设置点播转直播项目 Id 。
 * @method string getOperation() 获取请参考 [操作类型](#Operation)。
 * @method void setOperation(string $Operation) 设置请参考 [操作类型](#Operation)。
 * @method array getSourceInfos() 获取输入源信息。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddSource、DeleteSource、SwitchSource 时必填。
 * @method void setSourceInfos(array $SourceInfos) 设置输入源信息。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddSource、DeleteSource、SwitchSource 时必填。
 * @method array getDestinationInfos() 获取输出源信息。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddDestination、DeleteDestination、EnableDestination、DisableDestination、ModifyDestination 时必填。
 * @method void setDestinationInfos(array $DestinationInfos) 设置输出源信息。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddDestination、DeleteDestination、EnableDestination、DisableDestination、ModifyDestination 时必填。
 * @method MediaCastOutputMediaSetting getOutputMediaSetting() 获取输出媒体配置。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 ModfiyOutputSetting 时必填。
 * @method void setOutputMediaSetting(MediaCastOutputMediaSetting $OutputMediaSetting) 设置输出媒体配置。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 ModfiyOutputSetting 时必填。
 * @method MediaCastPlaySetting getPlaySetting() 获取播放控制参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 ModifyPlaySetting 时必填。
 * @method void setPlaySetting(MediaCastPlaySetting $PlaySetting) 设置播放控制参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 ModifyPlaySetting 时必填。
 * @method integer getPosition() 获取新添加的输入源位于输入源列表的位置，从0开始。默认加在输入源列表的后面。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddSource 时必填。
 * @method void setPosition(integer $Position) 设置新添加的输入源位于输入源列表的位置，从0开始。默认加在输入源列表的后面。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddSource 时必填。
 * @method string getOperator() 获取操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以操作所有点播转直播项目。如果指定操作者，则操作者必须为项目所有者。
 * @method void setOperator(string $Operator) 设置操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以操作所有点播转直播项目。如果指定操作者，则操作者必须为项目所有者。
 */
class HandleMediaCastProjectRequest extends AbstractModel
{
    /**
     * @var string 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     */
    public $Platform;

    /**
     * @var string 点播转直播项目 Id 。
     */
    public $ProjectId;

    /**
     * @var string 请参考 [操作类型](#Operation)。
     */
    public $Operation;

    /**
     * @var array 输入源信息。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddSource、DeleteSource、SwitchSource 时必填。
     */
    public $SourceInfos;

    /**
     * @var array 输出源信息。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddDestination、DeleteDestination、EnableDestination、DisableDestination、ModifyDestination 时必填。
     */
    public $DestinationInfos;

    /**
     * @var MediaCastOutputMediaSetting 输出媒体配置。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 ModfiyOutputSetting 时必填。
     */
    public $OutputMediaSetting;

    /**
     * @var MediaCastPlaySetting 播放控制参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 ModifyPlaySetting 时必填。
     */
    public $PlaySetting;

    /**
     * @var integer 新添加的输入源位于输入源列表的位置，从0开始。默认加在输入源列表的后面。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddSource 时必填。
     */
    public $Position;

    /**
     * @var string 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以操作所有点播转直播项目。如果指定操作者，则操作者必须为项目所有者。
     */
    public $Operator;

    /**
     * @param string $Platform 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     * @param string $ProjectId 点播转直播项目 Id 。
     * @param string $Operation 请参考 [操作类型](#Operation)。
     * @param array $SourceInfos 输入源信息。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddSource、DeleteSource、SwitchSource 时必填。
     * @param array $DestinationInfos 输出源信息。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddDestination、DeleteDestination、EnableDestination、DisableDestination、ModifyDestination 时必填。
     * @param MediaCastOutputMediaSetting $OutputMediaSetting 输出媒体配置。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 ModfiyOutputSetting 时必填。
     * @param MediaCastPlaySetting $PlaySetting 播放控制参数。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 ModifyPlaySetting 时必填。
     * @param integer $Position 新添加的输入源位于输入源列表的位置，从0开始。默认加在输入源列表的后面。具体操作方式详见 [操作类型](#Operation) 及下文示例。
当 Operation 为 AddSource 时必填。
     * @param string $Operator 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以操作所有点播转直播项目。如果指定操作者，则操作者必须为项目所有者。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
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

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
