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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAccountFactoryBaseline返回参数结构体
 *
 * @method integer getOwnerUin() 获取资源所属主账号uin。
 * @method void setOwnerUin(integer $OwnerUin) 设置资源所属主账号uin。
 * @method string getName() 获取基线项名称，基线项名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
 * @method void setName(string $Name) 设置基线项名称，基线项名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
 * @method array getBaselineConfigItems() 获取基线项配置列表。
 * @method void setBaselineConfigItems(array $BaselineConfigItems) 设置基线项配置列表。
 * @method string getCreateTime() 获取创建时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
 * @method string getUpdateTime() 获取更新时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetAccountFactoryBaselineResponse extends AbstractModel
{
    /**
     * @var integer 资源所属主账号uin。
     */
    public $OwnerUin;

    /**
     * @var string 基线项名称，基线项名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
     */
    public $Name;

    /**
     * @var array 基线项配置列表。
     */
    public $BaselineConfigItems;

    /**
     * @var string 创建时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
     */
    public $CreateTime;

    /**
     * @var string 更新时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
     */
    public $UpdateTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $OwnerUin 资源所属主账号uin。
     * @param string $Name 基线项名称，基线项名字唯一，仅支持英文字母、数宇、汉字、符号@、＆_[]-的组合，1-25个中文或英文字符。
     * @param array $BaselineConfigItems 基线项配置列表。
     * @param string $CreateTime 创建时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
     * @param string $UpdateTime 更新时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
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
        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BaselineConfigItems",$param) and $param["BaselineConfigItems"] !== null) {
            $this->BaselineConfigItems = [];
            foreach ($param["BaselineConfigItems"] as $key => $value){
                $obj = new BaselineInfoItem();
                $obj->deserialize($value);
                array_push($this->BaselineConfigItems, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
