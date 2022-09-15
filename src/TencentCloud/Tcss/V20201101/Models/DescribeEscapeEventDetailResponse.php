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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEscapeEventDetail返回参数结构体
 *
 * @method RunTimeEventBaseInfo getEventBaseInfo() 获取事件基本信息
 * @method void setEventBaseInfo(RunTimeEventBaseInfo $EventBaseInfo) 设置事件基本信息
 * @method ProcessDetailInfo getProcessInfo() 获取进程信息
 * @method void setProcessInfo(ProcessDetailInfo $ProcessInfo) 设置进程信息
 * @method EscapeEventDescription getEventDetail() 获取事件描述
 * @method void setEventDetail(EscapeEventDescription $EventDetail) 设置事件描述
 * @method ProcessBaseInfo getParentProcessInfo() 获取父进程信息
 * @method void setParentProcessInfo(ProcessBaseInfo $ParentProcessInfo) 设置父进程信息
 * @method ProcessBaseInfo getAncestorProcessInfo() 获取祖先进程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAncestorProcessInfo(ProcessBaseInfo $AncestorProcessInfo) 设置祖先进程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEscapeEventDetailResponse extends AbstractModel
{
    /**
     * @var RunTimeEventBaseInfo 事件基本信息
     */
    public $EventBaseInfo;

    /**
     * @var ProcessDetailInfo 进程信息
     */
    public $ProcessInfo;

    /**
     * @var EscapeEventDescription 事件描述
     */
    public $EventDetail;

    /**
     * @var ProcessBaseInfo 父进程信息
     */
    public $ParentProcessInfo;

    /**
     * @var ProcessBaseInfo 祖先进程信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AncestorProcessInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param RunTimeEventBaseInfo $EventBaseInfo 事件基本信息
     * @param ProcessDetailInfo $ProcessInfo 进程信息
     * @param EscapeEventDescription $EventDetail 事件描述
     * @param ProcessBaseInfo $ParentProcessInfo 父进程信息
     * @param ProcessBaseInfo $AncestorProcessInfo 祖先进程信息
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
        if (array_key_exists("EventBaseInfo",$param) and $param["EventBaseInfo"] !== null) {
            $this->EventBaseInfo = new RunTimeEventBaseInfo();
            $this->EventBaseInfo->deserialize($param["EventBaseInfo"]);
        }

        if (array_key_exists("ProcessInfo",$param) and $param["ProcessInfo"] !== null) {
            $this->ProcessInfo = new ProcessDetailInfo();
            $this->ProcessInfo->deserialize($param["ProcessInfo"]);
        }

        if (array_key_exists("EventDetail",$param) and $param["EventDetail"] !== null) {
            $this->EventDetail = new EscapeEventDescription();
            $this->EventDetail->deserialize($param["EventDetail"]);
        }

        if (array_key_exists("ParentProcessInfo",$param) and $param["ParentProcessInfo"] !== null) {
            $this->ParentProcessInfo = new ProcessBaseInfo();
            $this->ParentProcessInfo->deserialize($param["ParentProcessInfo"]);
        }

        if (array_key_exists("AncestorProcessInfo",$param) and $param["AncestorProcessInfo"] !== null) {
            $this->AncestorProcessInfo = new ProcessBaseInfo();
            $this->AncestorProcessInfo->deserialize($param["AncestorProcessInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
