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
namespace TencentCloud\Irp\V20220324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReportAction请求参数结构体
 *
 * @method string getBid() 获取业务id
 * @method void setBid(string $Bid) 设置业务id
 * @method array getDocBehaviorList() 获取上报的行为对象数组，数量不超过50
 * @method void setDocBehaviorList(array $DocBehaviorList) 设置上报的行为对象数组，数量不超过50
 */
class ReportActionRequest extends AbstractModel
{
    /**
     * @var string 业务id
     */
    public $Bid;

    /**
     * @var array 上报的行为对象数组，数量不超过50
     */
    public $DocBehaviorList;

    /**
     * @param string $Bid 业务id
     * @param array $DocBehaviorList 上报的行为对象数组，数量不超过50
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
        if (array_key_exists("Bid",$param) and $param["Bid"] !== null) {
            $this->Bid = $param["Bid"];
        }

        if (array_key_exists("DocBehaviorList",$param) and $param["DocBehaviorList"] !== null) {
            $this->DocBehaviorList = [];
            foreach ($param["DocBehaviorList"] as $key => $value){
                $obj = new DocBehavior();
                $obj->deserialize($value);
                array_push($this->DocBehaviorList, $obj);
            }
        }
    }
}
