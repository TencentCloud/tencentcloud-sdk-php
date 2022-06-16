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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail返回参数结构体
 *
 * @method string getTaskId() 获取该字段用于返回创建视频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置该字段用于返回创建视频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataId() 获取该字段用于返回调用视频审核接口时传入的数据ID参数，方便数据的辨别和管理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataId(string $DataId) 设置该字段用于返回调用视频审核接口时传入的数据ID参数，方便数据的辨别和管理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizType() 获取该字段用于返回调用视频审核接口时传入的BizType参数，方便数据的辨别和管理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizType(string $BizType) 设置该字段用于返回调用视频审核接口时传入的BizType参数，方便数据的辨别和管理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取该字段用于返回调用视频审核接口时传入的TaskInput参数中的任务名称，方便任务的识别与管理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置该字段用于返回调用视频审核接口时传入的TaskInput参数中的任务名称，方便任务的识别与管理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取该字段用于返回调用视频审核接口时输入的视频审核类型，取值为：**VIDEO**（点播视频）和**LIVE_VIDEO**（直播视频），默认值为VIDEO。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置该字段用于返回调用视频审核接口时输入的视频审核类型，取值为：**VIDEO**（点播视频）和**LIVE_VIDEO**（直播视频），默认值为VIDEO。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestion(string $Suggestion) 设置该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaInfo getMediaInfo() 获取该字段用于返回输入媒体文件的详细信息，包括编解码格式、分片时长等信息。详细内容敬请参考MediaInfo数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaInfo(MediaInfo $MediaInfo) 设置该字段用于返回输入媒体文件的详细信息，包括编解码格式、分片时长等信息。详细内容敬请参考MediaInfo数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method InputInfo getInputInfo() 获取该字段用于返回审核服务的媒体内容信息，主要包括传入文件类型和访问地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputInfo(InputInfo $InputInfo) 设置该字段用于返回审核服务的媒体内容信息，主要包括传入文件类型和访问地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImageSegments() 获取该字段用于返回视频中截帧审核的结果，详细返回内容敬请参考ImageSegments数据结构的描述。<br>备注：数据有效期为24小时，如需要延长存储时间，请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageSegments(array $ImageSegments) 设置该字段用于返回视频中截帧审核的结果，详细返回内容敬请参考ImageSegments数据结构的描述。<br>备注：数据有效期为24小时，如需要延长存储时间，请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAudioSegments() 获取该字段用于返回视频中音频审核的结果，详细返回内容敬请参考AudioSegments数据结构的描述。<br>备注：数据有效期为24小时，如需要延长存储时间，请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioSegments(array $AudioSegments) 设置该字段用于返回视频中音频审核的结果，详细返回内容敬请参考AudioSegments数据结构的描述。<br>备注：数据有效期为24小时，如需要延长存储时间，请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorType() 获取当任务状态为Error时，返回对应错误的类型，取值：**DECODE_ERROR**: 解码失败。（输入资源中可能包含无法解码的视频）
**URL_ERROR**：下载地址验证失败。
**TIMEOUT_ERROR**：处理超时。任务状态非Error时默认返回为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorType(string $ErrorType) 设置当任务状态为Error时，返回对应错误的类型，取值：**DECODE_ERROR**: 解码失败。（输入资源中可能包含无法解码的视频）
**URL_ERROR**：下载地址验证失败。
**TIMEOUT_ERROR**：处理超时。任务状态非Error时默认返回为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorDescription() 获取当任务状态为Error时，该字段用于返回对应错误的详细描述，任务状态非Error时默认返回为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDescription(string $ErrorDescription) 设置当任务状态为Error时，该字段用于返回对应错误的详细描述，任务状态非Error时默认返回为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabel() 获取该字段用于返回检测结果所对应的标签。如果未命中恶意，返回Normal，如果命中恶意，则返回Labels中优先级最高的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置该字段用于返回检测结果所对应的标签。如果未命中恶意，返回Normal，如果命中恶意，则返回Labels中优先级最高的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string 该字段用于返回创建视频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 该字段用于返回调用视频审核接口时传入的数据ID参数，方便数据的辨别和管理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataId;

    /**
     * @var string 该字段用于返回调用视频审核接口时传入的BizType参数，方便数据的辨别和管理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizType;

    /**
     * @var string 该字段用于返回调用视频审核接口时传入的TaskInput参数中的任务名称，方便任务的识别与管理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 该字段用于返回调用视频审核接口时输入的视频审核类型，取值为：**VIDEO**（点播视频）和**LIVE_VIDEO**（直播视频），默认值为VIDEO。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Suggestion;

    /**
     * @var array 该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var MediaInfo 该字段用于返回输入媒体文件的详细信息，包括编解码格式、分片时长等信息。详细内容敬请参考MediaInfo数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaInfo;

    /**
     * @var InputInfo 该字段用于返回审核服务的媒体内容信息，主要包括传入文件类型和访问地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputInfo;

    /**
     * @var string 该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var array 该字段用于返回视频中截帧审核的结果，详细返回内容敬请参考ImageSegments数据结构的描述。<br>备注：数据有效期为24小时，如需要延长存储时间，请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageSegments;

    /**
     * @var array 该字段用于返回视频中音频审核的结果，详细返回内容敬请参考AudioSegments数据结构的描述。<br>备注：数据有效期为24小时，如需要延长存储时间，请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioSegments;

    /**
     * @var string 当任务状态为Error时，返回对应错误的类型，取值：**DECODE_ERROR**: 解码失败。（输入资源中可能包含无法解码的视频）
**URL_ERROR**：下载地址验证失败。
**TIMEOUT_ERROR**：处理超时。任务状态非Error时默认返回为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorType;

    /**
     * @var string 当任务状态为Error时，该字段用于返回对应错误的详细描述，任务状态非Error时默认返回为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDescription;

    /**
     * @var string 该字段用于返回检测结果所对应的标签。如果未命中恶意，返回Normal，如果命中恶意，则返回Labels中优先级最高的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 该字段用于返回创建视频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataId 该字段用于返回调用视频审核接口时传入的数据ID参数，方便数据的辨别和管理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizType 该字段用于返回调用视频审核接口时传入的BizType参数，方便数据的辨别和管理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 该字段用于返回调用视频审核接口时传入的TaskInput参数中的任务名称，方便任务的识别与管理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 该字段用于返回调用视频审核接口时输入的视频审核类型，取值为：**VIDEO**（点播视频）和**LIVE_VIDEO**（直播视频），默认值为VIDEO。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaInfo $MediaInfo 该字段用于返回输入媒体文件的详细信息，包括编解码格式、分片时长等信息。详细内容敬请参考MediaInfo数据结构的描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param InputInfo $InputInfo 该字段用于返回审核服务的媒体内容信息，主要包括传入文件类型和访问地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImageSegments 该字段用于返回视频中截帧审核的结果，详细返回内容敬请参考ImageSegments数据结构的描述。<br>备注：数据有效期为24小时，如需要延长存储时间，请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AudioSegments 该字段用于返回视频中音频审核的结果，详细返回内容敬请参考AudioSegments数据结构的描述。<br>备注：数据有效期为24小时，如需要延长存储时间，请在已配置的COS储存桶中设置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorType 当任务状态为Error时，返回对应错误的类型，取值：**DECODE_ERROR**: 解码失败。（输入资源中可能包含无法解码的视频）
**URL_ERROR**：下载地址验证失败。
**TIMEOUT_ERROR**：处理超时。任务状态非Error时默认返回为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorDescription 当任务状态为Error时，该字段用于返回对应错误的详细描述，任务状态非Error时默认返回为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Label 该字段用于返回检测结果所对应的标签。如果未命中恶意，返回Normal，如果命中恶意，则返回Labels中优先级最高的标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TaskLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("MediaInfo",$param) and $param["MediaInfo"] !== null) {
            $this->MediaInfo = new MediaInfo();
            $this->MediaInfo->deserialize($param["MediaInfo"]);
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new InputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("ImageSegments",$param) and $param["ImageSegments"] !== null) {
            $this->ImageSegments = [];
            foreach ($param["ImageSegments"] as $key => $value){
                $obj = new ImageSegments();
                $obj->deserialize($value);
                array_push($this->ImageSegments, $obj);
            }
        }

        if (array_key_exists("AudioSegments",$param) and $param["AudioSegments"] !== null) {
            $this->AudioSegments = [];
            foreach ($param["AudioSegments"] as $key => $value){
                $obj = new AudioSegments();
                $obj->deserialize($value);
                array_push($this->AudioSegments, $obj);
            }
        }

        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("ErrorDescription",$param) and $param["ErrorDescription"] !== null) {
            $this->ErrorDescription = $param["ErrorDescription"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
