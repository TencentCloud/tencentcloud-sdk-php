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
 * @method integer getType() 获取接入类型
 * @method void setType(integer $Type) 设置接入类型
 * @method string getBotAppKey() 获取应用AppKey
 * @method void setBotAppKey(string $BotAppKey) 设置应用AppKey
 * @method string getVisitorBizId() 获取坐席ID
 * @method void setVisitorBizId(string $VisitorBizId) 设置坐席ID
 * @method array getVisitorLabels() 获取坐席标签
 * @method void setVisitorLabels(array $VisitorLabels) 设置坐席标签
 */
class GetWsTokenRequest extends AbstractModel
{
    /**
     * @var integer 接入类型
     */
    public $Type;

    /**
     * @var string 应用AppKey
     */
    public $BotAppKey;

    /**
     * @var string 坐席ID
     */
    public $VisitorBizId;

    /**
     * @var array 坐席标签
     */
    public $VisitorLabels;

    /**
     * @param integer $Type 接入类型
     * @param string $BotAppKey 应用AppKey
     * @param string $VisitorBizId 坐席ID
     * @param array $VisitorLabels 坐席标签
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
