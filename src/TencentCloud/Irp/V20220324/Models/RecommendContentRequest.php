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
 * RecommendContent请求参数结构体
 *
 * @method string getBid() 获取业务id
 * @method void setBid(string $Bid) 设置业务id
 * @method string getSceneId() 获取场景id：比如有“猜你喜欢”，“热门内容”等推荐模块，每一个模块都有一个scene_id来表示。 在控制台创建场景后获取。需要跟行为上报时的id一致
 * @method void setSceneId(string $SceneId) 设置场景id：比如有“猜你喜欢”，“热门内容”等推荐模块，每一个模块都有一个scene_id来表示。 在控制台创建场景后获取。需要跟行为上报时的id一致
 * @method array getUserIdList() 获取用户唯一ID数组，每个数组元素详见userId结构体，若不填，则接口返回热门结果
 * @method void setUserIdList(array $UserIdList) 设置用户唯一ID数组，每个数组元素详见userId结构体，若不填，则接口返回热门结果
 * @method string getRecTraceId() 获取会话id：必须和行为数据上报时所填写的traceId相同，用于行为数据来自于那次在线推荐请求的归因。**注意：此处如果没传，则响应会返回一个全局唯一ID返回给客户，并需客户透传给行为日志上报接口**
 * @method void setRecTraceId(string $RecTraceId) 设置会话id：必须和行为数据上报时所填写的traceId相同，用于行为数据来自于那次在线推荐请求的归因。**注意：此处如果没传，则响应会返回一个全局唯一ID返回给客户，并需客户透传给行为日志上报接口**
 * @method integer getItemCnt() 获取推荐数量：物料优选的结果， 默认50个，目前最多支持200个的内容返回，如果返回个数更多，会影响性能，容易超时。
 * @method void setItemCnt(integer $ItemCnt) 设置推荐数量：物料优选的结果， 默认50个，目前最多支持200个的内容返回，如果返回个数更多，会影响性能，容易超时。
 * @method string getPoolId() 获取物料池id，用于召回该pool_id下的商品，如果有多个，用英文;分割。**注意：此处poolId需和物料上报时的poolIdList对应上**
 * @method void setPoolId(string $PoolId) 设置物料池id，用于召回该pool_id下的商品，如果有多个，用英文;分割。**注意：此处poolId需和物料上报时的poolIdList对应上**
 * @method string getCurrentItemId() 获取来源物料id，即用户当前浏览的物料id，用于在内容详情页获取关联推荐内容
 * @method void setCurrentItemId(string $CurrentItemId) 设置来源物料id，即用户当前浏览的物料id，用于在内容详情页获取关联推荐内容
 * @method integer getResponseTimeout() 获取请求响应超时时间，单位ms，默认300ms，数值设置的过小，会影响推荐效果，最小支持250ms
 * @method void setResponseTimeout(integer $ResponseTimeout) 设置请求响应超时时间，单位ms，默认300ms，数值设置的过小，会影响推荐效果，最小支持250ms
 * @method string getItemTypeRatio() 获取返回结果中不同物料类型的比例，比例顺序需严格按照（图文，长视频，短视频，小视频）进行。只允许传[0,100]数字，多个请用**英文冒号**分割，且加起来不能超过100，以及比例数量不能超过**场景绑定的物料类型**（图文，长视频，短视频，小视频）数。**示例：**图文和短视频比例为40%:60%时，则填40:60图文和短视频比例为0%:100%时，则填0:100图文，长视频和短视频的比例为，图文占20%，剩余80%由长视频和短视频随机返回，则填20:80或仅填20均可
 * @method void setItemTypeRatio(string $ItemTypeRatio) 设置返回结果中不同物料类型的比例，比例顺序需严格按照（图文，长视频，短视频，小视频）进行。只允许传[0,100]数字，多个请用**英文冒号**分割，且加起来不能超过100，以及比例数量不能超过**场景绑定的物料类型**（图文，长视频，短视频，小视频）数。**示例：**图文和短视频比例为40%:60%时，则填40:60图文和短视频比例为0%:100%时，则填0:100图文，长视频和短视频的比例为，图文占20%，剩余80%由长视频和短视频随机返回，则填20:80或仅填20均可
 */
class RecommendContentRequest extends AbstractModel
{
    /**
     * @var string 业务id
     */
    public $Bid;

    /**
     * @var string 场景id：比如有“猜你喜欢”，“热门内容”等推荐模块，每一个模块都有一个scene_id来表示。 在控制台创建场景后获取。需要跟行为上报时的id一致
     */
    public $SceneId;

    /**
     * @var array 用户唯一ID数组，每个数组元素详见userId结构体，若不填，则接口返回热门结果
     */
    public $UserIdList;

    /**
     * @var string 会话id：必须和行为数据上报时所填写的traceId相同，用于行为数据来自于那次在线推荐请求的归因。**注意：此处如果没传，则响应会返回一个全局唯一ID返回给客户，并需客户透传给行为日志上报接口**
     */
    public $RecTraceId;

    /**
     * @var integer 推荐数量：物料优选的结果， 默认50个，目前最多支持200个的内容返回，如果返回个数更多，会影响性能，容易超时。
     */
    public $ItemCnt;

    /**
     * @var string 物料池id，用于召回该pool_id下的商品，如果有多个，用英文;分割。**注意：此处poolId需和物料上报时的poolIdList对应上**
     */
    public $PoolId;

    /**
     * @var string 来源物料id，即用户当前浏览的物料id，用于在内容详情页获取关联推荐内容
     */
    public $CurrentItemId;

    /**
     * @var integer 请求响应超时时间，单位ms，默认300ms，数值设置的过小，会影响推荐效果，最小支持250ms
     */
    public $ResponseTimeout;

    /**
     * @var string 返回结果中不同物料类型的比例，比例顺序需严格按照（图文，长视频，短视频，小视频）进行。只允许传[0,100]数字，多个请用**英文冒号**分割，且加起来不能超过100，以及比例数量不能超过**场景绑定的物料类型**（图文，长视频，短视频，小视频）数。**示例：**图文和短视频比例为40%:60%时，则填40:60图文和短视频比例为0%:100%时，则填0:100图文，长视频和短视频的比例为，图文占20%，剩余80%由长视频和短视频随机返回，则填20:80或仅填20均可
     */
    public $ItemTypeRatio;

    /**
     * @param string $Bid 业务id
     * @param string $SceneId 场景id：比如有“猜你喜欢”，“热门内容”等推荐模块，每一个模块都有一个scene_id来表示。 在控制台创建场景后获取。需要跟行为上报时的id一致
     * @param array $UserIdList 用户唯一ID数组，每个数组元素详见userId结构体，若不填，则接口返回热门结果
     * @param string $RecTraceId 会话id：必须和行为数据上报时所填写的traceId相同，用于行为数据来自于那次在线推荐请求的归因。**注意：此处如果没传，则响应会返回一个全局唯一ID返回给客户，并需客户透传给行为日志上报接口**
     * @param integer $ItemCnt 推荐数量：物料优选的结果， 默认50个，目前最多支持200个的内容返回，如果返回个数更多，会影响性能，容易超时。
     * @param string $PoolId 物料池id，用于召回该pool_id下的商品，如果有多个，用英文;分割。**注意：此处poolId需和物料上报时的poolIdList对应上**
     * @param string $CurrentItemId 来源物料id，即用户当前浏览的物料id，用于在内容详情页获取关联推荐内容
     * @param integer $ResponseTimeout 请求响应超时时间，单位ms，默认300ms，数值设置的过小，会影响推荐效果，最小支持250ms
     * @param string $ItemTypeRatio 返回结果中不同物料类型的比例，比例顺序需严格按照（图文，长视频，短视频，小视频）进行。只允许传[0,100]数字，多个请用**英文冒号**分割，且加起来不能超过100，以及比例数量不能超过**场景绑定的物料类型**（图文，长视频，短视频，小视频）数。**示例：**图文和短视频比例为40%:60%时，则填40:60图文和短视频比例为0%:100%时，则填0:100图文，长视频和短视频的比例为，图文占20%，剩余80%由长视频和短视频随机返回，则填20:80或仅填20均可
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

        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("UserIdList",$param) and $param["UserIdList"] !== null) {
            $this->UserIdList = [];
            foreach ($param["UserIdList"] as $key => $value){
                $obj = new UserIdInfo();
                $obj->deserialize($value);
                array_push($this->UserIdList, $obj);
            }
        }

        if (array_key_exists("RecTraceId",$param) and $param["RecTraceId"] !== null) {
            $this->RecTraceId = $param["RecTraceId"];
        }

        if (array_key_exists("ItemCnt",$param) and $param["ItemCnt"] !== null) {
            $this->ItemCnt = $param["ItemCnt"];
        }

        if (array_key_exists("PoolId",$param) and $param["PoolId"] !== null) {
            $this->PoolId = $param["PoolId"];
        }

        if (array_key_exists("CurrentItemId",$param) and $param["CurrentItemId"] !== null) {
            $this->CurrentItemId = $param["CurrentItemId"];
        }

        if (array_key_exists("ResponseTimeout",$param) and $param["ResponseTimeout"] !== null) {
            $this->ResponseTimeout = $param["ResponseTimeout"];
        }

        if (array_key_exists("ItemTypeRatio",$param) and $param["ItemTypeRatio"] !== null) {
            $this->ItemTypeRatio = $param["ItemTypeRatio"];
        }
    }
}
