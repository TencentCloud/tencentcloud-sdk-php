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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSafeInfo返回参数结构体
 *
 * @method string getContext() 获取<p>文本内容</p>
 * @method void setContext(string $Context) 设置<p>文本内容</p>
 * @method string getTitle() 获取<p>标题</p>
 * @method void setTitle(string $Title) 设置<p>标题</p>
 * @method string getUrl() 获取<p>超链接地址</p>
 * @method void setUrl(string $Url) 设置<p>超链接地址</p>
 * @method integer getEffectHostCount() 获取<p>受影响机器数</p>
 * @method void setEffectHostCount(integer $EffectHostCount) 设置<p>受影响机器数</p>
 * @method string getEventName() 获取<p>受影响事件名称</p>
 * @method void setEventName(string $EventName) 设置<p>受影响事件名称</p>
 * @method integer getEventCategory() 获取<p>受影响事件类型 0 无 1 木马 2 漏洞 3基线</p>
 * @method void setEventCategory(integer $EventCategory) 设置<p>受影响事件类型 0 无 1 木马 2 漏洞 3基线</p>
 * @method boolean getIsShow() 获取<p>是否展示通知</p>
 * @method void setIsShow(boolean $IsShow) 设置<p>是否展示通知</p>
 * @method integer getId() 获取<p>Id值</p>
 * @method void setId(integer $Id) 设置<p>Id值</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSafeInfoResponse extends AbstractModel
{
    /**
     * @var string <p>文本内容</p>
     */
    public $Context;

    /**
     * @var string <p>标题</p>
     */
    public $Title;

    /**
     * @var string <p>超链接地址</p>
     */
    public $Url;

    /**
     * @var integer <p>受影响机器数</p>
     */
    public $EffectHostCount;

    /**
     * @var string <p>受影响事件名称</p>
     */
    public $EventName;

    /**
     * @var integer <p>受影响事件类型 0 无 1 木马 2 漏洞 3基线</p>
     */
    public $EventCategory;

    /**
     * @var boolean <p>是否展示通知</p>
     */
    public $IsShow;

    /**
     * @var integer <p>Id值</p>
     */
    public $Id;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Context <p>文本内容</p>
     * @param string $Title <p>标题</p>
     * @param string $Url <p>超链接地址</p>
     * @param integer $EffectHostCount <p>受影响机器数</p>
     * @param string $EventName <p>受影响事件名称</p>
     * @param integer $EventCategory <p>受影响事件类型 0 无 1 木马 2 漏洞 3基线</p>
     * @param boolean $IsShow <p>是否展示通知</p>
     * @param integer $Id <p>Id值</p>
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("EffectHostCount",$param) and $param["EffectHostCount"] !== null) {
            $this->EffectHostCount = $param["EffectHostCount"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventCategory",$param) and $param["EventCategory"] !== null) {
            $this->EventCategory = $param["EventCategory"];
        }

        if (array_key_exists("IsShow",$param) and $param["IsShow"] !== null) {
            $this->IsShow = $param["IsShow"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
