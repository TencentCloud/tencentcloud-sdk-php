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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGatewayApis请求参数结构体
 *
 * @method string getGroupId() 获取<p>分组ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>分组ID</p>
 * @method integer getOffset() 获取<p>翻页偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>翻页偏移量</p>
 * @method integer getLimit() 获取<p>每页的记录数</p>
 * @method void setLimit(integer $Limit) 设置<p>每页的记录数</p>
 * @method string getSearchWord() 获取<p>搜索关键字，支持 API path</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>搜索关键字，支持 API path</p>
 * @method string getGatewayDeployGroupId() 获取<p>部署组ID</p>
 * @method void setGatewayDeployGroupId(string $GatewayDeployGroupId) 设置<p>部署组ID</p>
 * @method string getReleaseStatus() 获取<p>发布状态, drafted(未发布)/released(已发布)/releasing(发布中)/failed(发布失败)</p>
 * @method void setReleaseStatus(string $ReleaseStatus) 设置<p>发布状态, drafted(未发布)/released(已发布)/releasing(发布中)/failed(发布失败)</p>
 * @method array getExtendFieldList() 获取<p>返回扩展出参字段名</p>
 * @method void setExtendFieldList(array $ExtendFieldList) 设置<p>返回扩展出参字段名</p>
 * @method string getApiOnlineStatus() 获取<p>服务接口状态</p><p>枚举值：</p><ul><li>ONLINE： 在线状态</li><li>OFFLINE： 离线状态</li><li>UNKNOWN： 未知</li><li>DELETED： 查询MS API不存在</li></ul>
 * @method void setApiOnlineStatus(string $ApiOnlineStatus) 设置<p>服务接口状态</p><p>枚举值：</p><ul><li>ONLINE： 在线状态</li><li>OFFLINE： 离线状态</li><li>UNKNOWN： 未知</li><li>DELETED： 查询MS API不存在</li></ul>
 */
class DescribeGatewayApisRequest extends AbstractModel
{
    /**
     * @var string <p>分组ID</p>
     */
    public $GroupId;

    /**
     * @var integer <p>翻页偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页的记录数</p>
     */
    public $Limit;

    /**
     * @var string <p>搜索关键字，支持 API path</p>
     */
    public $SearchWord;

    /**
     * @var string <p>部署组ID</p>
     */
    public $GatewayDeployGroupId;

    /**
     * @var string <p>发布状态, drafted(未发布)/released(已发布)/releasing(发布中)/failed(发布失败)</p>
     */
    public $ReleaseStatus;

    /**
     * @var array <p>返回扩展出参字段名</p>
     */
    public $ExtendFieldList;

    /**
     * @var string <p>服务接口状态</p><p>枚举值：</p><ul><li>ONLINE： 在线状态</li><li>OFFLINE： 离线状态</li><li>UNKNOWN： 未知</li><li>DELETED： 查询MS API不存在</li></ul>
     */
    public $ApiOnlineStatus;

    /**
     * @param string $GroupId <p>分组ID</p>
     * @param integer $Offset <p>翻页偏移量</p>
     * @param integer $Limit <p>每页的记录数</p>
     * @param string $SearchWord <p>搜索关键字，支持 API path</p>
     * @param string $GatewayDeployGroupId <p>部署组ID</p>
     * @param string $ReleaseStatus <p>发布状态, drafted(未发布)/released(已发布)/releasing(发布中)/failed(发布失败)</p>
     * @param array $ExtendFieldList <p>返回扩展出参字段名</p>
     * @param string $ApiOnlineStatus <p>服务接口状态</p><p>枚举值：</p><ul><li>ONLINE： 在线状态</li><li>OFFLINE： 离线状态</li><li>UNKNOWN： 未知</li><li>DELETED： 查询MS API不存在</li></ul>
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("GatewayDeployGroupId",$param) and $param["GatewayDeployGroupId"] !== null) {
            $this->GatewayDeployGroupId = $param["GatewayDeployGroupId"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("ExtendFieldList",$param) and $param["ExtendFieldList"] !== null) {
            $this->ExtendFieldList = $param["ExtendFieldList"];
        }

        if (array_key_exists("ApiOnlineStatus",$param) and $param["ApiOnlineStatus"] !== null) {
            $this->ApiOnlineStatus = $param["ApiOnlineStatus"];
        }
    }
}
