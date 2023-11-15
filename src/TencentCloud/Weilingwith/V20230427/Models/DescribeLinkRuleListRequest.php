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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLinkRuleList请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method integer getPageNumber() 获取分页查询，第几页，必传，大于0
 * @method void setPageNumber(integer $PageNumber) 设置分页查询，第几页，必传，大于0
 * @method integer getPageSize() 获取每页条数，必传大于0
 * @method void setPageSize(integer $PageSize) 设置每页条数，必传大于0
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method string getTriggerType() 获取事件触发类型
 * @method void setTriggerType(string $TriggerType) 设置事件触发类型
 * @method array getIdSet() 获取联动id
 * @method void setIdSet(array $IdSet) 设置联动id
 */
class DescribeLinkRuleListRequest extends AbstractModel
{
    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var integer 分页查询，第几页，必传，大于0
     */
    public $PageNumber;

    /**
     * @var integer 每页条数，必传大于0
     */
    public $PageSize;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var string 事件触发类型
     */
    public $TriggerType;

    /**
     * @var array 联动id
     */
    public $IdSet;

    /**
     * @param integer $WorkspaceId 工作空间id
     * @param integer $PageNumber 分页查询，第几页，必传，大于0
     * @param integer $PageSize 每页条数，必传大于0
     * @param string $ApplicationToken 应用token
     * @param string $TriggerType 事件触发类型
     * @param array $IdSet 联动id
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }
    }
}
