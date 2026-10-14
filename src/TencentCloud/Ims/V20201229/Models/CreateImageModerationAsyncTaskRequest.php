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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImageModerationAsyncTask请求参数结构体
 *
 * @method string getCallbackUrl() 获取<p>接收审核信息回调地址，审核过程中产生的所有结果发送至此地址。</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>接收审核信息回调地址，审核过程中产生的所有结果发送至此地址。</p>
 * @method string getBizType() 获取<p>接口使用的识别策略编号，<strong>该策略编号在控制台上获取</strong>，获取方式请参考快速入门：</p><ul><li>标准内容安全：https://cloud.tencent.com/document/product/1124/135196</li><li>AI 生成识别：https://cloud.tencent.com/document/product/1124/135204</li></ul>
 * @method void setBizType(string $BizType) 设置<p>接口使用的识别策略编号，<strong>该策略编号在控制台上获取</strong>，获取方式请参考快速入门：</p><ul><li>标准内容安全：https://cloud.tencent.com/document/product/1124/135196</li><li>AI 生成识别：https://cloud.tencent.com/document/product/1124/135204</li></ul>
 * @method string getDataId() 获取<p>该字段表示您为待检测图片分配的数据 ID，作用是方便您对数据进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
 * @method void setDataId(string $DataId) 设置<p>该字段表示您为待检测图片分配的数据 ID，作用是方便您对数据进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
 * @method string getFileContent() 获取<p>待检测图片的 Base64 编码， <strong>该字段与FileUrl必须选择输入其中一个</strong>。</p>
 * @method void setFileContent(string $FileContent) 设置<p>待检测图片的 Base64 编码， <strong>该字段与FileUrl必须选择输入其中一个</strong>。</p>
 * @method string getFileUrl() 获取<p>待检测图片的访问链接，<strong>该字段与FileContent必须选择输入其中一个</strong>。</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>待检测图片的访问链接，<strong>该字段与FileContent必须选择输入其中一个</strong>。</p>
 * @method integer getInterval() 获取<p>用于 GIF 检测，表示截帧频率（每隔多少帧抽取一帧进行检测）。<br>建议与  MaxFrames 字段组合使用，例如  Interval=3、 MaxFrames=4，表示每 3 帧抽取 1 帧，最多检测 4 帧。默认值为 0，表示仅检测 GIF 第一帧</p>
 * @method void setInterval(integer $Interval) 设置<p>用于 GIF 检测，表示截帧频率（每隔多少帧抽取一帧进行检测）。<br>建议与  MaxFrames 字段组合使用，例如  Interval=3、 MaxFrames=4，表示每 3 帧抽取 1 帧，最多检测 4 帧。默认值为 0，表示仅检测 GIF 第一帧</p>
 * @method integer getMaxFrames() 获取<p>用于 GIF 检测，指定最大截帧数量，上限为 5 帧（暂不支持上调至更高值）。<br>建议与  Interval 字段配合使用：例如  Interval=3、 MaxFrames=4，表示每 3 帧抽取 1 帧，最多检测 4 帧。默认值为 1，即仅检测 GIF 首帧。</p>
 * @method void setMaxFrames(integer $MaxFrames) 设置<p>用于 GIF 检测，指定最大截帧数量，上限为 5 帧（暂不支持上调至更高值）。<br>建议与  Interval 字段配合使用：例如  Interval=3、 MaxFrames=4，表示每 3 帧抽取 1 帧，最多检测 4 帧。默认值为 1，即仅检测 GIF 首帧。</p>
 * @method User getUser() 获取<p>该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。</p>
 * @method void setUser(User $User) 设置<p>该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。</p>
 * @method Device getDevice() 获取<p>该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。</p>
 * @method void setDevice(Device $Device) 设置<p>该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。</p>
 * @method string getType() 获取<p>服务类型，可为空，默认为 IMAGE。</p><p>枚举值：</p><ul><li>IMAGE： 标准内容安全</li><li>IMAGE_AIGC： AI 生成识别</li></ul>
 * @method void setType(string $Type) 设置<p>服务类型，可为空，默认为 IMAGE。</p><p>枚举值：</p><ul><li>IMAGE： 标准内容安全</li><li>IMAGE_AIGC： AI 生成识别</li></ul>
 * @method array getFileUrlList() 获取<p>审核 Agent 专用：待审核图片的访问链接 ，一次请求最多支持传入 4 张。</p>
 * @method void setFileUrlList(array $FileUrlList) 设置<p>审核 Agent 专用：待审核图片的访问链接 ，一次请求最多支持传入 4 张。</p>
 * @method string getTextContent() 获取<p>审核 Agent 专用：待审文本内容，需使用 UTF-8 编码并以 Base64 格式传入，字数上限 5000 字。</p>
 * @method void setTextContent(string $TextContent) 设置<p>审核 Agent 专用：待审文本内容，需使用 UTF-8 编码并以 Base64 格式传入，字数上限 5000 字。</p>
 */
class CreateImageModerationAsyncTaskRequest extends AbstractModel
{
    /**
     * @var string <p>接收审核信息回调地址，审核过程中产生的所有结果发送至此地址。</p>
     */
    public $CallbackUrl;

    /**
     * @var string <p>接口使用的识别策略编号，<strong>该策略编号在控制台上获取</strong>，获取方式请参考快速入门：</p><ul><li>标准内容安全：https://cloud.tencent.com/document/product/1124/135196</li><li>AI 生成识别：https://cloud.tencent.com/document/product/1124/135204</li></ul>
     */
    public $BizType;

    /**
     * @var string <p>该字段表示您为待检测图片分配的数据 ID，作用是方便您对数据进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
     */
    public $DataId;

    /**
     * @var string <p>待检测图片的 Base64 编码， <strong>该字段与FileUrl必须选择输入其中一个</strong>。</p>
     */
    public $FileContent;

    /**
     * @var string <p>待检测图片的访问链接，<strong>该字段与FileContent必须选择输入其中一个</strong>。</p>
     */
    public $FileUrl;

    /**
     * @var integer <p>用于 GIF 检测，表示截帧频率（每隔多少帧抽取一帧进行检测）。<br>建议与  MaxFrames 字段组合使用，例如  Interval=3、 MaxFrames=4，表示每 3 帧抽取 1 帧，最多检测 4 帧。默认值为 0，表示仅检测 GIF 第一帧</p>
     */
    public $Interval;

    /**
     * @var integer <p>用于 GIF 检测，指定最大截帧数量，上限为 5 帧（暂不支持上调至更高值）。<br>建议与  Interval 字段配合使用：例如  Interval=3、 MaxFrames=4，表示每 3 帧抽取 1 帧，最多检测 4 帧。默认值为 1，即仅检测 GIF 首帧。</p>
     */
    public $MaxFrames;

    /**
     * @var User <p>该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。</p>
     */
    public $User;

    /**
     * @var Device <p>该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。</p>
     */
    public $Device;

    /**
     * @var string <p>服务类型，可为空，默认为 IMAGE。</p><p>枚举值：</p><ul><li>IMAGE： 标准内容安全</li><li>IMAGE_AIGC： AI 生成识别</li></ul>
     */
    public $Type;

    /**
     * @var array <p>审核 Agent 专用：待审核图片的访问链接 ，一次请求最多支持传入 4 张。</p>
     */
    public $FileUrlList;

    /**
     * @var string <p>审核 Agent 专用：待审文本内容，需使用 UTF-8 编码并以 Base64 格式传入，字数上限 5000 字。</p>
     */
    public $TextContent;

    /**
     * @param string $CallbackUrl <p>接收审核信息回调地址，审核过程中产生的所有结果发送至此地址。</p>
     * @param string $BizType <p>接口使用的识别策略编号，<strong>该策略编号在控制台上获取</strong>，获取方式请参考快速入门：</p><ul><li>标准内容安全：https://cloud.tencent.com/document/product/1124/135196</li><li>AI 生成识别：https://cloud.tencent.com/document/product/1124/135204</li></ul>
     * @param string $DataId <p>该字段表示您为待检测图片分配的数据 ID，作用是方便您对数据进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，<strong>长度不超过64个字符</strong>。</p>
     * @param string $FileContent <p>待检测图片的 Base64 编码， <strong>该字段与FileUrl必须选择输入其中一个</strong>。</p>
     * @param string $FileUrl <p>待检测图片的访问链接，<strong>该字段与FileContent必须选择输入其中一个</strong>。</p>
     * @param integer $Interval <p>用于 GIF 检测，表示截帧频率（每隔多少帧抽取一帧进行检测）。<br>建议与  MaxFrames 字段组合使用，例如  Interval=3、 MaxFrames=4，表示每 3 帧抽取 1 帧，最多检测 4 帧。默认值为 0，表示仅检测 GIF 第一帧</p>
     * @param integer $MaxFrames <p>用于 GIF 检测，指定最大截帧数量，上限为 5 帧（暂不支持上调至更高值）。<br>建议与  Interval 字段配合使用：例如  Interval=3、 MaxFrames=4，表示每 3 帧抽取 1 帧，最多检测 4 帧。默认值为 1，即仅检测 GIF 首帧。</p>
     * @param User $User <p>该字段标识用户信息，传入后可增强甄别有违规风险的发布者账号。</p>
     * @param Device $Device <p>该字段标识设备信息，传入后可增强甄别有违规风险的发布者设备。</p>
     * @param string $Type <p>服务类型，可为空，默认为 IMAGE。</p><p>枚举值：</p><ul><li>IMAGE： 标准内容安全</li><li>IMAGE_AIGC： AI 生成识别</li></ul>
     * @param array $FileUrlList <p>审核 Agent 专用：待审核图片的访问链接 ，一次请求最多支持传入 4 张。</p>
     * @param string $TextContent <p>审核 Agent 专用：待审文本内容，需使用 UTF-8 编码并以 Base64 格式传入，字数上限 5000 字。</p>
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
        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MaxFrames",$param) and $param["MaxFrames"] !== null) {
            $this->MaxFrames = $param["MaxFrames"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new User();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileUrlList",$param) and $param["FileUrlList"] !== null) {
            $this->FileUrlList = $param["FileUrlList"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }
    }
}
