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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TurnPDFToObjectAsyncGetResult请求参数结构体
 *
 * @method string getTaskID() 获取加密任务ID。在上一步通过TurnPDFToObjectAsync 接口返回的TaskID。
1、建议在上一步调用TurnPDFToObjectAsync接口传入PDF之后，等5-10分钟再调用此接口获取 json 结果。如果任务还没完成，可以等待几分钟之后再重新调用此接口获取 json 结果。
2、临时加密存储的 json 结果会 24 小时后定时自动删除，因此TaskID 仅 24 小时内有效。
3、TaskID 与腾讯云的账号绑定，通过 TurnPDFToObjectAsync 传入 PDF 文件和通过 TurnPDFToObjectAsyncGetResult 获取 json 结果，必须是同一个腾讯云账号，否则无法获取到 json 结果。
 * @method void setTaskID(string $TaskID) 设置加密任务ID。在上一步通过TurnPDFToObjectAsync 接口返回的TaskID。
1、建议在上一步调用TurnPDFToObjectAsync接口传入PDF之后，等5-10分钟再调用此接口获取 json 结果。如果任务还没完成，可以等待几分钟之后再重新调用此接口获取 json 结果。
2、临时加密存储的 json 结果会 24 小时后定时自动删除，因此TaskID 仅 24 小时内有效。
3、TaskID 与腾讯云的账号绑定，通过 TurnPDFToObjectAsync 传入 PDF 文件和通过 TurnPDFToObjectAsyncGetResult 获取 json 结果，必须是同一个腾讯云账号，否则无法获取到 json 结果。
 */
class TurnPDFToObjectAsyncGetResultRequest extends AbstractModel
{
    /**
     * @var string 加密任务ID。在上一步通过TurnPDFToObjectAsync 接口返回的TaskID。
1、建议在上一步调用TurnPDFToObjectAsync接口传入PDF之后，等5-10分钟再调用此接口获取 json 结果。如果任务还没完成，可以等待几分钟之后再重新调用此接口获取 json 结果。
2、临时加密存储的 json 结果会 24 小时后定时自动删除，因此TaskID 仅 24 小时内有效。
3、TaskID 与腾讯云的账号绑定，通过 TurnPDFToObjectAsync 传入 PDF 文件和通过 TurnPDFToObjectAsyncGetResult 获取 json 结果，必须是同一个腾讯云账号，否则无法获取到 json 结果。
     */
    public $TaskID;

    /**
     * @param string $TaskID 加密任务ID。在上一步通过TurnPDFToObjectAsync 接口返回的TaskID。
1、建议在上一步调用TurnPDFToObjectAsync接口传入PDF之后，等5-10分钟再调用此接口获取 json 结果。如果任务还没完成，可以等待几分钟之后再重新调用此接口获取 json 结果。
2、临时加密存储的 json 结果会 24 小时后定时自动删除，因此TaskID 仅 24 小时内有效。
3、TaskID 与腾讯云的账号绑定，通过 TurnPDFToObjectAsync 传入 PDF 文件和通过 TurnPDFToObjectAsyncGetResult 获取 json 结果，必须是同一个腾讯云账号，否则无法获取到 json 结果。
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
        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }
    }
}
