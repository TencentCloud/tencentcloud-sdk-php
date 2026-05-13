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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmAccessRecord请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method array getId() 获取来源ip
 * @method void setId(array $Id) 设置来源ip
 * @method string getView() 获取视图。ip或instance
 * @method void setView(string $View) 设置视图。ip或instance
 * @method integer getNoted() 获取阅读标记。 1-已阅
 * @method void setNoted(integer $Noted) 设置阅读标记。 1-已阅
 */
class ModifyDspmAccessRecordRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var array 来源ip
     */
    public $Id;

    /**
     * @var string 视图。ip或instance
     */
    public $View;

    /**
     * @var integer 阅读标记。 1-已阅
     */
    public $Noted;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param array $Id 来源ip
     * @param string $View 视图。ip或instance
     * @param integer $Noted 阅读标记。 1-已阅
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = [];
            foreach ($param["Id"] as $key => $value){
                $obj = new DspmAccessRecordId();
                $obj->deserialize($value);
                array_push($this->Id, $obj);
            }
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("Noted",$param) and $param["Noted"] !== null) {
            $this->Noted = $param["Noted"];
        }
    }
}
