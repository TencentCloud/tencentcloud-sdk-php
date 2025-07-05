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
 * SplitMedia请求参数结构体
 *
 * @method string getFileId() 获取视频的 ID。
 * @method void setFileId(string $FileId) 设置视频的 ID。
 * @method array getSegments() 获取视频拆条任务信息列表，最多同时支持100个拆条信息。
 * @method void setSegments(array $Segments) 设置视频拆条任务信息列表，最多同时支持100个拆条信息。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getSessionContext() 获取标识来源上下文，用于透传用户请求信息，在 SplitMediaComplete 回调和任务流状态变更回调将返回该字段值，最长 1000个字符。
 * @method void setSessionContext(string $SessionContext) 设置标识来源上下文，用于透传用户请求信息，在 SplitMediaComplete 回调和任务流状态变更回调将返回该字段值，最长 1000个字符。
 * @method string getSessionId() 获取用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method integer getTasksPriority() 获取任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 */
class SplitMediaRequest extends AbstractModel
{
    /**
     * @var string 视频的 ID。
     */
    public $FileId;

    /**
     * @var array 视频拆条任务信息列表，最多同时支持100个拆条信息。
     */
    public $Segments;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 标识来源上下文，用于透传用户请求信息，在 SplitMediaComplete 回调和任务流状态变更回调将返回该字段值，最长 1000个字符。
     */
    public $SessionContext;

    /**
     * @var string 用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var integer 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     */
    public $TasksPriority;

    /**
     * @param string $FileId 视频的 ID。
     * @param array $Segments 视频拆条任务信息列表，最多同时支持100个拆条信息。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $SessionContext 标识来源上下文，用于透传用户请求信息，在 SplitMediaComplete 回调和任务流状态变更回调将返回该字段值，最长 1000个字符。
     * @param string $SessionId 用于任务去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param integer $TasksPriority 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Segments",$param) and $param["Segments"] !== null) {
            $this->Segments = [];
            foreach ($param["Segments"] as $key => $value){
                $obj = new SplitMediaTaskConfig();
                $obj->deserialize($value);
                array_push($this->Segments, $obj);
            }
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
