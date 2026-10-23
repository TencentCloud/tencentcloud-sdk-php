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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetUserKeyList请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method integer getOffset() 获取<p>分页的offset，从0开始</p>
 * @method void setOffset(integer $Offset) 设置<p>分页的offset，从0开始</p>
 * @method integer getLimit() 获取<p>分页的每页多少条</p>
 * @method void setLimit(integer $Limit) 设置<p>分页的每页多少条</p>
 * @method string getName() 获取<p>根据集成名称模糊查询，name</p>
 * @method void setName(string $Name) 设置<p>根据集成名称模糊查询，name</p>
 * @method string getAuthTypeCode() 获取<p>集成类型映射码</p>
 * @method void setAuthTypeCode(string $AuthTypeCode) 设置<p>集成类型映射码</p>
 * @method string getBusiness() 获取<p>业务类型，integration：从集成中心来的，默认为空，表示是从授权管理中心来的</p>
 * @method void setBusiness(string $Business) 设置<p>业务类型，integration：从集成中心来的，默认为空，表示是从授权管理中心来的</p>
 */
class GetUserKeyListRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var integer <p>分页的offset，从0开始</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页的每页多少条</p>
     */
    public $Limit;

    /**
     * @var string <p>根据集成名称模糊查询，name</p>
     */
    public $Name;

    /**
     * @var string <p>集成类型映射码</p>
     */
    public $AuthTypeCode;

    /**
     * @var string <p>业务类型，integration：从集成中心来的，默认为空，表示是从授权管理中心来的</p>
     */
    public $Business;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param integer $Offset <p>分页的offset，从0开始</p>
     * @param integer $Limit <p>分页的每页多少条</p>
     * @param string $Name <p>根据集成名称模糊查询，name</p>
     * @param string $AuthTypeCode <p>集成类型映射码</p>
     * @param string $Business <p>业务类型，integration：从集成中心来的，默认为空，表示是从授权管理中心来的</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AuthTypeCode",$param) and $param["AuthTypeCode"] !== null) {
            $this->AuthTypeCode = $param["AuthTypeCode"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }
    }
}
