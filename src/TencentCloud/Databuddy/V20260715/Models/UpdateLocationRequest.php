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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateLocation请求参数结构体
 *
 * @method string getLocationName() 获取存储位置名，必填
 * @method void setLocationName(string $LocationName) 设置存储位置名，必填
 * @method array getUpdates() 获取更新location的操作列表，必填。通过 UpdateType 指定操作类型，支持的 UpdateType：modify_location_name（修改名称）、modify_location_comment（修改描述）、modify_location_properties（修改属性）、modify_file_event_subscription（操作COS文件事件订阅开关）
 * @method void setUpdates(array $Updates) 设置更新location的操作列表，必填。通过 UpdateType 指定操作类型，支持的 UpdateType：modify_location_name（修改名称）、modify_location_comment（修改描述）、modify_location_properties（修改属性）、modify_file_event_subscription（操作COS文件事件订阅开关）
 * @method string getWorkspaceId() 获取调用时所在workspace唯一id，必填
 * @method void setWorkspaceId(string $WorkspaceId) 设置调用时所在workspace唯一id，必填
 * @method CosEventSubscription getFileEventSubscription() 获取COS 文件事件订阅配置，可选；不设置时不改动现有订阅（仅 COS 类型 Location 生效）。设置时：先按新配置重新订阅（同桶覆盖写，幂等），再修改 Location 元数据。与 Updates 中的 modify_file_event_subscription 配合表达开关操作：Updates 含该类型且本字段有值=开启/编辑订阅；Updates 含该类型且本字段未设置=关闭订阅；Updates 不含该类型时维持默认语义（不设置不动、设置覆盖）
 * @method void setFileEventSubscription(CosEventSubscription $FileEventSubscription) 设置COS 文件事件订阅配置，可选；不设置时不改动现有订阅（仅 COS 类型 Location 生效）。设置时：先按新配置重新订阅（同桶覆盖写，幂等），再修改 Location 元数据。与 Updates 中的 modify_file_event_subscription 配合表达开关操作：Updates 含该类型且本字段有值=开启/编辑订阅；Updates 含该类型且本字段未设置=关闭订阅；Updates 不含该类型时维持默认语义（不设置不动、设置覆盖）
 */
class UpdateLocationRequest extends AbstractModel
{
    /**
     * @var string 存储位置名，必填
     */
    public $LocationName;

    /**
     * @var array 更新location的操作列表，必填。通过 UpdateType 指定操作类型，支持的 UpdateType：modify_location_name（修改名称）、modify_location_comment（修改描述）、modify_location_properties（修改属性）、modify_file_event_subscription（操作COS文件事件订阅开关）
     */
    public $Updates;

    /**
     * @var string 调用时所在workspace唯一id，必填
     */
    public $WorkspaceId;

    /**
     * @var CosEventSubscription COS 文件事件订阅配置，可选；不设置时不改动现有订阅（仅 COS 类型 Location 生效）。设置时：先按新配置重新订阅（同桶覆盖写，幂等），再修改 Location 元数据。与 Updates 中的 modify_file_event_subscription 配合表达开关操作：Updates 含该类型且本字段有值=开启/编辑订阅；Updates 含该类型且本字段未设置=关闭订阅；Updates 不含该类型时维持默认语义（不设置不动、设置覆盖）
     */
    public $FileEventSubscription;

    /**
     * @param string $LocationName 存储位置名，必填
     * @param array $Updates 更新location的操作列表，必填。通过 UpdateType 指定操作类型，支持的 UpdateType：modify_location_name（修改名称）、modify_location_comment（修改描述）、modify_location_properties（修改属性）、modify_file_event_subscription（操作COS文件事件订阅开关）
     * @param string $WorkspaceId 调用时所在workspace唯一id，必填
     * @param CosEventSubscription $FileEventSubscription COS 文件事件订阅配置，可选；不设置时不改动现有订阅（仅 COS 类型 Location 生效）。设置时：先按新配置重新订阅（同桶覆盖写，幂等），再修改 Location 元数据。与 Updates 中的 modify_file_event_subscription 配合表达开关操作：Updates 含该类型且本字段有值=开启/编辑订阅；Updates 含该类型且本字段未设置=关闭订阅；Updates 不含该类型时维持默认语义（不设置不动、设置覆盖）
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
        if (array_key_exists("LocationName",$param) and $param["LocationName"] !== null) {
            $this->LocationName = $param["LocationName"];
        }

        if (array_key_exists("Updates",$param) and $param["Updates"] !== null) {
            $this->Updates = [];
            foreach ($param["Updates"] as $key => $value){
                $obj = new LocationUpdate();
                $obj->deserialize($value);
                array_push($this->Updates, $obj);
            }
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("FileEventSubscription",$param) and $param["FileEventSubscription"] !== null) {
            $this->FileEventSubscription = new CosEventSubscription();
            $this->FileEventSubscription->deserialize($param["FileEventSubscription"]);
        }
    }
}
