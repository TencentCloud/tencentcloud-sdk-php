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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWsToken请求参数结构体
 *
 * @method integer getType() 获取接入类型，当前请填写5
 * @method void setType(integer $Type) 设置接入类型，当前请填写5
 * @method string getBotAppKey() 获取当Type=5时，必填；应用AppKey（应用发布后在应用页面[发布管理]-[调用信息]-[API管理]处获取）
 * @method void setBotAppKey(string $BotAppKey) 设置当Type=5时，必填；应用AppKey（应用发布后在应用页面[发布管理]-[调用信息]-[API管理]处获取）
 * @method string getVisitorBizId() 获取访客ID（外部输入，建议唯一，标识当前接入会话的用户）
 * @method void setVisitorBizId(string $VisitorBizId) 设置访客ID（外部输入，建议唯一，标识当前接入会话的用户）
 * @method array getVisitorLabels() 获取知识标签，用于知识库中知识的检索过滤。该字段即将下线，请使用对话端接口中的 custom_variables 字段替代该字段。
 * @method void setVisitorLabels(array $VisitorLabels) 设置知识标签，用于知识库中知识的检索过滤。该字段即将下线，请使用对话端接口中的 custom_variables 字段替代该字段。
 */
class GetWsTokenRequest extends AbstractModel
{
    /**
     * @var integer 接入类型，当前请填写5
     */
    public $Type;

    /**
     * @var string 当Type=5时，必填；应用AppKey（应用发布后在应用页面[发布管理]-[调用信息]-[API管理]处获取）
     */
    public $BotAppKey;

    /**
     * @var string 访客ID（外部输入，建议唯一，标识当前接入会话的用户）
     */
    public $VisitorBizId;

    /**
     * @var array 知识标签，用于知识库中知识的检索过滤。该字段即将下线，请使用对话端接口中的 custom_variables 字段替代该字段。
     */
    public $VisitorLabels;

    /**
     * @param integer $Type 接入类型，当前请填写5
     * @param string $BotAppKey 当Type=5时，必填；应用AppKey（应用发布后在应用页面[发布管理]-[调用信息]-[API管理]处获取）
     * @param string $VisitorBizId 访客ID（外部输入，建议唯一，标识当前接入会话的用户）
     * @param array $VisitorLabels 知识标签，用于知识库中知识的检索过滤。该字段即将下线，请使用对话端接口中的 custom_variables 字段替代该字段。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BotAppKey",$param) and $param["BotAppKey"] !== null) {
            $this->BotAppKey = $param["BotAppKey"];
        }

        if (array_key_exists("VisitorBizId",$param) and $param["VisitorBizId"] !== null) {
            $this->VisitorBizId = $param["VisitorBizId"];
        }

        if (array_key_exists("VisitorLabels",$param) and $param["VisitorLabels"] !== null) {
            $this->VisitorLabels = [];
            foreach ($param["VisitorLabels"] as $key => $value){
                $obj = new GetWsTokenReq_Label();
                $obj->deserialize($value);
                array_push($this->VisitorLabels, $obj);
            }
        }
    }
}
