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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileConvertTask返回参数结构体
 *
 * @method string getTaskId() 获取<p>任务Id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务Id</p>
 * @method integer getTaskStatus() 获取<p>任务状态，需要关注的状态</p><p>枚举值：</p><ul><li>0： NeedTranform - 任务已提交</li><li>4： Processing - 文档转换中</li><li>8： TaskEnd - 任务处理完成</li><li>-2： DownloadFailed - 下载失败</li><li>-6： ProcessFailed - 转换失败</li><li>-13： ProcessTimeout - 转换文件超时</li></ul>
 * @method void setTaskStatus(integer $TaskStatus) 设置<p>任务状态，需要关注的状态</p><p>枚举值：</p><ul><li>0： NeedTranform - 任务已提交</li><li>4： Processing - 文档转换中</li><li>8： TaskEnd - 任务处理完成</li><li>-2： DownloadFailed - 下载失败</li><li>-6： ProcessFailed - 转换失败</li><li>-13： ProcessTimeout - 转换文件超时</li></ul>
 * @method string getTaskMessage() 获取<p>状态描述，需要关注的状态</p><ul><li> **NeedTranform** : 任务已提交</li><li> **Processing** : 文档转换中</li><li> **TaskEnd** : 任务处理完成</li><li> **DownloadFailed** : 下载失败</li><li> **ProcessFailed** : 转换失败</li><li> **ProcessTimeout** : 转换文件超时</li></ul>
 * @method void setTaskMessage(string $TaskMessage) 设置<p>状态描述，需要关注的状态</p><ul><li> **NeedTranform** : 任务已提交</li><li> **Processing** : 文档转换中</li><li> **TaskEnd** : 任务处理完成</li><li> **DownloadFailed** : 下载失败</li><li> **ProcessFailed** : 转换失败</li><li> **ProcessTimeout** : 转换文件超时</li></ul>
 * @method string getResourceId() 获取<p>资源Id（即FileId），用于<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles">用PDF文件创建签署流程</a></p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源Id（即FileId），用于<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles">用PDF文件创建签署流程</a></p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFileConvertTaskResponse extends AbstractModel
{
    /**
     * @var string <p>任务Id</p>
     */
    public $TaskId;

    /**
     * @var integer <p>任务状态，需要关注的状态</p><p>枚举值：</p><ul><li>0： NeedTranform - 任务已提交</li><li>4： Processing - 文档转换中</li><li>8： TaskEnd - 任务处理完成</li><li>-2： DownloadFailed - 下载失败</li><li>-6： ProcessFailed - 转换失败</li><li>-13： ProcessTimeout - 转换文件超时</li></ul>
     */
    public $TaskStatus;

    /**
     * @var string <p>状态描述，需要关注的状态</p><ul><li> **NeedTranform** : 任务已提交</li><li> **Processing** : 文档转换中</li><li> **TaskEnd** : 任务处理完成</li><li> **DownloadFailed** : 下载失败</li><li> **ProcessFailed** : 转换失败</li><li> **ProcessTimeout** : 转换文件超时</li></ul>
     */
    public $TaskMessage;

    /**
     * @var string <p>资源Id（即FileId），用于<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles">用PDF文件创建签署流程</a></p>
     */
    public $ResourceId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>任务Id</p>
     * @param integer $TaskStatus <p>任务状态，需要关注的状态</p><p>枚举值：</p><ul><li>0： NeedTranform - 任务已提交</li><li>4： Processing - 文档转换中</li><li>8： TaskEnd - 任务处理完成</li><li>-2： DownloadFailed - 下载失败</li><li>-6： ProcessFailed - 转换失败</li><li>-13： ProcessTimeout - 转换文件超时</li></ul>
     * @param string $TaskMessage <p>状态描述，需要关注的状态</p><ul><li> **NeedTranform** : 任务已提交</li><li> **Processing** : 文档转换中</li><li> **TaskEnd** : 任务处理完成</li><li> **DownloadFailed** : 下载失败</li><li> **ProcessFailed** : 转换失败</li><li> **ProcessTimeout** : 转换文件超时</li></ul>
     * @param string $ResourceId <p>资源Id（即FileId），用于<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles">用PDF文件创建签署流程</a></p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskMessage",$param) and $param["TaskMessage"] !== null) {
            $this->TaskMessage = $param["TaskMessage"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
