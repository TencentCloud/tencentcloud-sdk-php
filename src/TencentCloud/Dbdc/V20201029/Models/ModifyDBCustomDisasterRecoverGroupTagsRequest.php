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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBCustomDisasterRecoverGroupTags请求参数结构体
 *
 * @method string getDisasterRecoverGroupId() 获取<p>置放群组ID</p>
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置<p>置放群组ID</p>
 * @method array getAddTags() 获取<p>为 DB Custom 置放群组绑定的标签信息</p><p>入参限制：参考标签侧的限制</p><p>如果置放群组未关联输入的标签键，则增加关联；若已关联，则将该置放群组关联的键对应的标签值修改为输入值。本接口中 AddTags 和 DeleteTagKeys 二者必须存在其一，且二者不能包含相同的标签键。</p>
 * @method void setAddTags(array $AddTags) 设置<p>为 DB Custom 置放群组绑定的标签信息</p><p>入参限制：参考标签侧的限制</p><p>如果置放群组未关联输入的标签键，则增加关联；若已关联，则将该置放群组关联的键对应的标签值修改为输入值。本接口中 AddTags 和 DeleteTagKeys 二者必须存在其一，且二者不能包含相同的标签键。</p>
 * @method array getDeleteTagKeys() 获取<p>需要解关联的标签Key</p><p>本接口中 AddTags 和 DeleteTagKeys 二者必须存在其一，且二者不能包含相同的标签键。</p>
 * @method void setDeleteTagKeys(array $DeleteTagKeys) 设置<p>需要解关联的标签Key</p><p>本接口中 AddTags 和 DeleteTagKeys 二者必须存在其一，且二者不能包含相同的标签键。</p>
 */
class ModifyDBCustomDisasterRecoverGroupTagsRequest extends AbstractModel
{
    /**
     * @var string <p>置放群组ID</p>
     */
    public $DisasterRecoverGroupId;

    /**
     * @var array <p>为 DB Custom 置放群组绑定的标签信息</p><p>入参限制：参考标签侧的限制</p><p>如果置放群组未关联输入的标签键，则增加关联；若已关联，则将该置放群组关联的键对应的标签值修改为输入值。本接口中 AddTags 和 DeleteTagKeys 二者必须存在其一，且二者不能包含相同的标签键。</p>
     */
    public $AddTags;

    /**
     * @var array <p>需要解关联的标签Key</p><p>本接口中 AddTags 和 DeleteTagKeys 二者必须存在其一，且二者不能包含相同的标签键。</p>
     */
    public $DeleteTagKeys;

    /**
     * @param string $DisasterRecoverGroupId <p>置放群组ID</p>
     * @param array $AddTags <p>为 DB Custom 置放群组绑定的标签信息</p><p>入参限制：参考标签侧的限制</p><p>如果置放群组未关联输入的标签键，则增加关联；若已关联，则将该置放群组关联的键对应的标签值修改为输入值。本接口中 AddTags 和 DeleteTagKeys 二者必须存在其一，且二者不能包含相同的标签键。</p>
     * @param array $DeleteTagKeys <p>需要解关联的标签Key</p><p>本接口中 AddTags 和 DeleteTagKeys 二者必须存在其一，且二者不能包含相同的标签键。</p>
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
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("AddTags",$param) and $param["AddTags"] !== null) {
            $this->AddTags = [];
            foreach ($param["AddTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->AddTags, $obj);
            }
        }

        if (array_key_exists("DeleteTagKeys",$param) and $param["DeleteTagKeys"] !== null) {
            $this->DeleteTagKeys = $param["DeleteTagKeys"];
        }
    }
}
